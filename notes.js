let userNote1;
let userNote2;
let userNote3;

function importText(textFile) {
    "use strict";
    var rawFile = new XMLHttpRequest();
    var allText = "";
    rawFile.open("Get", textFile, false);
    rawFile.onreadystatechange = function()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                allText = rawFile.responseText;
            }
        }
    }
    rawFile.send(null);
    return allText;
}

$(window).on('load', function () {

    userNote1 = importText("textfile1.txt");
    userNote2 = importText("textfile2.txt");
    userNote3 = importText("textfile3.txt");
        
    $('.cover').addClass("fade-out");
    $('#mynotes').hide();
    $('#notesCon').hide();


    $("#note1").val(userNote1);
    $("#note2").val(userNote2);
    $("#note3").val(userNote3);

    if($('#note2').val() == "")
    {
        $('#note2').hide();
        $("#saveb2").hide();
    }
    if($('#note3').val() == "")
    {
        $('#note3').hide();
        $("#saveb3").hide();
    }
    else
    {
        $("#newNote").hide(); 
    }
    

    setTimeout(function() {
        $('#mynotes').show();
        $('.cover').hide();
        $('#mynotes').addClass("focus-in-expand");
    }, 800);
    setTimeout(function() {
        $('#notesCon').show();
        $('#notesCon').addClass("fade-in");
    }, 1200);
    
  })

function needToSaveNote1()
{
    $("#saveb1").val("click to save note 1");
}

function needToSaveNote2()
{
    $("#saveb2").val("click to save note 2");
}


function needToSaveNote3()
{
    $("#saveb3").val("click to save note 3");
}


function newNote()
{
    if ($("#note2").is(":visible"))
    {
        $("#saveb3").show();
        $("#note3").show();
        $("#newNote").hide();   
    }
    else
    {
        $("#saveb2").show();
        $("#note2").show();
    }
}