

//Toggle selected checkboxes, if the main toggle is true, make everything checked, and vice versa
function toggleCheckboxes(){
   var toggleAllCheckboxVal = $("#toggleAllCheckbox").prop("checked");
    
   $(".tdCheckbox").each((i,checkbox)=>{
     $(checkbox).prop("checked",toggleAllCheckboxVal);
   });
}

function deleteSelectedCourses(){
    
     var ids = []; 
    $(".tdCheckbox:checked").each(function(i,e){
     var courseIdTxt = $(e).attr('id').toString();
     var courseId = courseIdTxt.replace('checkbox_','');    
     ids.push(courseId);
     });
         
     if(confirm("Are you sure you want do delete "+ ids.length+' course(s)?') === true)
     {
        const xhttp = new XMLHttpRequest();
        var postData = ids.join(',');
        console.log(postData);
        
        console.log("deleteCourses.php?ids="+postData);

        xhttp.open("GET", "deleteCourses.php?ids="+postData);
        xhttp.send();

        //3. When the request and response are both ready, get json data and parse them to an array
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                var res = this.responseText;
                console.log(res);
                window.location = "courseSelectionForm.php";
            }
        };
     }
     
     }




