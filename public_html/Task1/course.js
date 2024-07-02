//Import the jema.js schema to validate json
import {Schema} from 'https://cdn.jsdelivr.net/gh/nuxodin/jema.js@x.x.x/schema.min.js';

setTimeout(getJsonData, 500);

function getJsonData() {
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
            populateTableWithCourses(courses);
        }
    };
    
}

function populateTableWithCourses(courses) {

    $(document).ready(function () {
        var table = $("#coursesTable");
        console.log(table);

        for (var i = 0; i < courses.length;i++) {


            //Define the variables out of the json, to later append them to table
            var code = courses[i].code;
            var codeWithFoundation = courses[i].codeWithFoundation;
            var name = courses[i].name;
            var fullTimeYears = courses[i].durationFull;
            var fullTimeFoundationYears = courses[i].durationFullFoundation;
            var partTimeMinYears = courses[i].durationPartMin;
            var partTimeMaxYears = courses[i].durationPartMax;
            var starting = courses[i].starting;
            var location = courses[i].location;
            var subjectDomain = courses[i].subjectDomain;
            var imageUrl = courses[i].imageUrl;

            var fullYearsText = "Full Time: " + fullTimeYears + " year(s) \n";
            var fullTimeFoundationYearsText = fullTimeFoundationYears > 0 ? "Full Time Foundation: " + fullTimeFoundationYears + " year(s) \n" : "";
            var partTimeYearsText = partTimeMinYears === partTimeMaxYears ? "Part Time: " + partTimeMaxYears + " year(s) \n" : "Part Time: " + partTimeMinYears + " - " + partTimeMaxYears + " year(s) \n";

            var duration = fullYearsText + fullTimeFoundationYearsText + partTimeYearsText;


            var textToAppend = "<tr>"
                    + "<td>" + code + "</td>"
                    + "<td>" + codeWithFoundation + "</td>"
                    + "<td>" + duration + "</td>"
                    + "<td>" + name + "</td>"
                    + "<td>" + starting + "</td>"
                    + "<td>" + location + "</td>"
                    + "<td>" + subjectDomain + "</td>"
                    + "<td>" +"<img src="+imageUrl +" class='img-thumbnail' >"+ "</td>"
                    + "</tr>";

            table.append(textToAppend);

        }
    });
}

function validateJsonSchema(){
const schema = new Schema({
    type: 'string',
    minLength: 3,
    pattern: '^[a-zA-Z]+$'
});
}