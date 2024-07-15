

//Toggle selected checkboxes, if the main toggle is true, make everything checked, and vice versa
function toggleCheckboxes(){
   var toggleAllCheckboxVal = $("#toggleAllCheckbox").prop("checked");
    
   //For each toggle td column check or uncheck based on the upper checkbox(the one that selects/unselects everything)
   $(".tdCheckbox").each((i,checkbox)=>{
     $(checkbox).prop("checked",toggleAllCheckboxVal);
   });
}
//The function that deletes the courses
function deleteSelectedCourses(){
    
    
    //Get the checked items/courses
     var ids = []; 
     
     //Get the id, parse the number and push to the array
    $(".tdCheckbox:checked").each(function(i,e){
     var courseIdTxt = $(e).attr('id').toString();
     var courseId = courseIdTxt.replace('checkbox_','');    
     ids.push(courseId);
     });
         
     //Make confirmation    
     if(confirm("Are you sure you want do delete "+ ids.length+' course(s)?') === true)
     {
        //If the confirm is true (yes) make a get ajax request and delete the selected ids courses
        const xhttp = new XMLHttpRequest();
        var postData = ids.join(',');
        console.log(postData);
        
        console.log("deleteCourses.php?ids="+postData);

        //Send the ajax request
        xhttp.open("GET", "deleteCourses.php?ids="+postData);
        xhttp.send();

        //3. When the request and response are both ready, get json data and parse them to an array
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                var res = this.responseText;
                console.log(res);
                //Navigate to the homepage(courseSelectionForm)
                window.location = "courseSelectionForm.php";
            }
        };
     }
     
     }




