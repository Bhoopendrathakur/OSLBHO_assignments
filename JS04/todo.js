displaytask();
let todoinput = document.getElementById("todoinput");
let submitbtn = document.getElementById("submitbtn");

submitbtn.addEventListener("click",function(){
    todoinputval= todoinput.value;
    if(todoinputval.trim()!=0){
        let webtask = localStorage.getItem("localtask");
    if(webtask == null){
    taskObj = [];
    
     }
    else{
        taskObj=JSON.parse(webtask);
        let clearbtn =document.getElementById("clearbtn");
        clearbtn.style.display="block";
    }
    taskObj.push(todoinputval);
    localStorage.setItem("localtask",JSON.stringify(taskObj));
    todoinput.value='';
    }
    displaytask(); 
})
function displaytask(){
    let webtask = localStorage.getItem("localtask");
    if(webtask == null){
        taskObj = [];
    }
    else{
        taskObj=JSON.parse(webtask);
    }
    let html ='';
    let addeditemlist = document.getElementById("addeditemlist")
    taskObj.forEach((item,index) => { 
        html += `<tr>
                     <td>${item}</td>
                     <td><button type="button" onclick="edittodo(${index})" ><img src="edit.png" height="15px"></button></td>
                     <td><button type="button" onclick="deletetodo(${index})"> <img src="delete.png" height="15px"></button></td>
                 </tr>`;

        
    });
    addeditemlist.innerHTML = html;
}
function edittodo(index){
    let editindex = document.getElementById("editindex");
    let submitbtn = document.getElementById("submitbtn");
    let editbtn = document.getElementById("editbtn");
    editindex.value = index ;
    let webtask = localStorage.getItem("localtask");
    let taskObj= JSON.parse(webtask);
    todoinput.value = taskObj[index];
    submitbtn.style.display="none";
    editbtn.style.display="inline-block";
    

}
//editing in same index array
let editbtn = document.getElementById("editbtn");
editbtn.addEventListener("click",function(){
    let webtask = localStorage.getItem("localtask");
    let taskObj= JSON.parse(webtask);
    let editindex = document.getElementById("editindex").value;
    taskObj[editindex]= todoinput.value;
    editbtn.style.display="none";
    submitbtn.style.display="inline-block";
    todoinput.value='';
    localStorage.setItem("localtask",JSON.stringify(taskObj));
    displaytask();
})
//Delete todo
function deletetodo(index){
    let webtask = localStorage.getItem("localtask");
    let taskObj= JSON.parse(webtask);
    taskObj.splice(index,1);
    localStorage.setItem("localtask",JSON.stringify(taskObj));
    displaytask();

}
//clear all todo
let clearbtn =document.getElementById("clearbtn");
clearbtn.addEventListener("click",function(){
    let editindex = document.getElementById("editindex");
    let submitbtn = document.getElementById("submitbtn");
    let webtask = localStorage.getItem("localtask");
    let taskObj= JSON.parse(webtask);
    if(webtask == null){
        taskObj = [];
    }
    else{
        taskObj=JSON.parse(webtask);
        taskObj=[];

    }
    todoinput.value='';
    editbtn.style.display="none";
    submitbtn.style.display="inline-block";
    localStorage.setItem("localtask",JSON.stringify(taskObj));
    clearbtn.style.display = "none";
    displaytask();
}) 

