$(document).ready(()=>{
    $("#Ajout").carousel("pause");
    $(".prev").click(function(){
        $("#Ajout").carousel("prev");
    });
    

    
});

document.getElementById('next').addEventListener('click',(e)=>{
    e.preventDefault();
    if(document.getElementById('title').value == ""){
        document.getElementById('title').classList.add('is-invalid');
        document.getElementById("alert-title").innerHTML = '<i class="fa fa-warning"></i>&nbsp; Titre ne peut pas être vide';

    }else{
        $("#Ajout").carousel("next");
    }
    
})

document.getElementById('title').addEventListener('focus',(e)=>{
    document.getElementById('title').classList.remove("is-invalid");
})

/**
 * Upload File
 */

const form = document.querySelector("form"),
forms = form.querySelector('.forms'),
fileInput = forms.querySelector('.file-input'),
progressArea = document.querySelector(".progress-area"),
uploadedArea = document.querySelector(".uploaded-area");

forms.addEventListener("click",()=>{
    fileInput.click();

    
});
fileInput.onchange = ({target}) =>{
        let file = target.files[0];
        if(file){
            let filename = file.name;
            uploadFile(filename,file);
        }
}

function uploadFile(name,files){
    let route = ""+document.getElementById('route').value+"";
    console.log(route)
    let xhr = new XMLHttpRequest();
    xhr.open("POST",route);
    xhr.upload.addEventListener("progress",({loaded,total}) =>{
        let fileLoaded = Math.floor((loaded / total)* 100);
        let fileTotal = Math.floor(total / 1000);
        let filesize;
        (fileTotal < 1024) ? filesize = fileTotal + " KB" :filesize = (loaded / (1024 * 1024)).toFixed(2)+ " MB";
        let progressHtml = '<li class="rw"><i class="fa fa-file"></i><div class="contenus"><div class="details"><span class="name">'+ name +'</span><span class="percent">'+fileLoaded+'%</span></div><div class="progress-br"><div class="progres" style="width: '+ fileLoaded +'%"></div></div></div></li>';
        progressArea.innerHTML = progressHtml;
        if(loaded == total){
            progressArea.innerHTML = "";
            let uploadedHtml = '<li class="rw"><div class="contenus"><i class="fa fa-file"></i<div class="details"><span class="name" style="font-size:10px;">'+name+'</span><span class="size">'+filesize+'</span></div></div><i class="fa fa-check"></i></li>';
            uploadedArea.insertAdjacentHTML('afterbegin',uploadedHtml);
            document.getElementById("next1").classList.remove('hide');
            document.getElementById("next1").addEventListener('click',()=>{
                $("#Ajout").carousel("next");
            })
            document.getElementById('return_link').value = name;
        }
        //
    });
    let formData = new FormData();
    formData.append('title',document.getElementById('title').value);
    formData.append('description',document.getElementById('description').value);
    formData.append('auteur',document.getElementById('auteur').value);
    formData.append('_token',document.querySelector("input[name='_token']").value);
    formData.append('link',files);
    xhr.send(formData);
}