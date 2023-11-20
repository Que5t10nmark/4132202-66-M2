
    var num = 10;
    let name = "Mark";
    age = 20;
    const year = 2003;

    console.log(year);
    
    fruit = ["banana","apple","orage"];

    console.log(fruit[1]);

    plant = {fruit:"banana",car:"apple",color:"orage"};

    console.log(plant);

    dataJson = {
        employee:[{namr: "Win"},{age: 20},{year: 1880}]
    };

    console.log(dataJson.employee[0].name);

    let msg  =name +" " +year;
    msg = `${name} ${year}`;

    console.log(msg);
    document.getElementById('title').innerHTML = msg;

    $(function(){
        $('#title')
        .html(msg +  " JQuery")
        .addClass("red");
    });
