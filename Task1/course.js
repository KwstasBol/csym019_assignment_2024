//The js file with the core logic of the CSYM019 - Task 1


//Define the selected currency to pound
var selectedCurrency = "pound";
//var previousCurrency = "pound";

var coursesJson = [];


//Using the setTimeout function after 0.5 second, the html table is populated with data
setTimeout(getJsonDataAndPopulateTable, 500);




//The function that gets the json data, tries to validate with the json schema and afterwards populates the table
function getJsonDataAndPopulateTable() {
    //1. Create AJAX xmlHttpRequest object
    const xhttp = new XMLHttpRequest();

    //2. Send the request to get the ./course.json file
    xhttp.open("GET", "course.json");
    xhttp.send();

    //3. When the request and response are both ready, get json data and parse them to an array
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            //AJAX response as text
            var jsonTextData = this.responseText;
            //Parsed text data to array
            var courses = JSON.parse(jsonTextData);
            coursesJson = courses;
            
            //Send also request to get the schema
            xhttp.open("GET", "courseSchema.json");
            xhttp.send();
            
             xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    //Get json schema
                      var jsonSchema = JSON.parse(this.responseText);  
                      
                    //Validate schema -- I tried to validate with the following function but I kept having problems with the schema version - it was available for v6
                      var coursesJsonIsValid = validateJsonSchema(jsonSchema,courses);

                    //Populate the table with the courses if the file is valid based on the json schema, else alert with error
                      if(coursesJsonIsValid){
                          populateTableWithCourses(courses);
                      }
                      else{
                          alert("The courses json file is invalid!");
                      }
                }};          
        }
    }; 
}

//The function that changes the price column of the table
 function changeCurrency(){
    //Get from the onchange event of the select element, the selected value & assign to the global variable selectedCurrency
     selectedCurrency = document.getElementById("currencySelector").value;
     //previousCurrency = selectedCurrency;
   // $(".priceTd").html(convertPriceCurrency());
    
    
    //For each td field that has this class (using JQuery), change the price to the new currency using .html() jquery inner method
    $('.priceTd').each(function(i, td) {
        console.log(i);
    var price = coursesJson[i].priceUkFull;    
    var newPrice = convertPriceCurrency(price); 
    $(td).html(newPrice);
});
          
     console.log("SELECTED:"+selectedCurrency);
     //populateTableWithCourses(courses);
}


//The function that changes the currency with exchanges factor that were found in the Internet. They could be dynamic in a future project version
function convertPriceCurrency(price){
    var gbpToEur = 1.18;
    var gbpToDol = 1.28;

    
    //Calculate...
     if(selectedCurrency === "euro"){
        return Math.floor(price * gbpToEur);
    }
      else if(selectedCurrency === "dollar"){
        return Math.floor(price * gbpToDol);
    }
    
    else{
        return price;
    }
}

//The function that populates the html, using the courses value that was received through the upper AJAX call
function populateTableWithCourses(courses) {


//When the document has been loaded (DOM)
    $(document).ready(function () {
        var table = $("#coursesTable");
        console.log(table);


//Traverse the courses array, and for each element get the correct json property
        for (var i = 0; i < courses.length;i++) {


            //Define the variables out of the json, to later append them to table
            var code = courses[i].code;
            var codeWithFoundation = courses[i].codeWithFoundation;
            var name = courses[i].name;
            var overview = courses[i].overview;
            var fullTimeYears = courses[i].durationFull;
            var fullTimeFoundationYears = courses[i].durationFullFoundation;
            var partTimeMinYears = courses[i].durationPartMin;
            var partTimeMaxYears = courses[i].durationPartMax;
            var starting = courses[i].startingPeriod;
            var location = courses[i].location;
            var subjectDomain = courses[i].subjectDomain;
            var imageUrl = courses[i].imageUrl;
            var priceUkFull = courses[i].priceUkFull;
            
            var fullYearsText = "Full Time: " + fullTimeYears + " year(s) \n";
            var fullTimeFoundationYearsText = fullTimeFoundationYears > 0 ? "Full Time Foundation: " + fullTimeFoundationYears + " year(s) \n" : "";
            var partTimeYearsText = partTimeMinYears === partTimeMaxYears ? "Part Time: " + partTimeMaxYears + " year(s) \n" : "Part Time: " + partTimeMinYears + " - " + partTimeMaxYears + " year(s) \n";

            var duration = fullYearsText + fullTimeFoundationYearsText + partTimeYearsText;

            
           //Append dynamically on the table, rows with the essential td fields inside, based on the variables that come from the AJAX responseText, in other words 'courses'
            var textToAppend = "<tr>"
                    + "<td>" + name + "</td>"
                    + "<td>" + overview + "</td>"
                    + "<td>" + code + "</td>"
                    + "<td>" + codeWithFoundation + "</td>"
                    + "<td class='priceTd'>" + priceUkFull + "</td>"
                    + "<td>" + duration + "</td>"
                    + "<td>" + starting + "</td>"
                    + "<td>" + location + "</td>"
                    + "<td>" + subjectDomain + "</td>"
                    + "<td>" +"<img src="+imageUrl +" class='img-thumbnail' >"+ "</td>"
                    + "</tr>";

            table.append(textToAppend);

        }
    });
}

//This function was tested with jema.js but it was failing because of jsonschema versions incompatibility. I let it just for reference and possible refactors
function validateJsonSchema(coursesJsonSchema,coursesJson){
    //TODO: Implement logic
/*const schema = new Schema(coursesJsonSchema);
var isValid = schema.validate(coursesJson);
const errors = schema.errors('L-'); 
for (const error of errors) {
    console.log(error.message);
    // "L-" does not match minLength:3
    // "L-" does not match pattern:^[a-zA-Z]+$
}*/
return true;
}