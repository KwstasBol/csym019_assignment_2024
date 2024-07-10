/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */



function toggleCheckboxes(){
    var toggleAllCheckboxVal = $("#toggleAllCheckbox").prop("checked");
    
   $(".tdCheckbox").each((i,checkbox)=>{
     $(checkbox).prop("checked",toggleAllCheckboxVal);
   });
}