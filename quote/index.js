$(document).ready(function(){
   var randomQuote;
   var randomNum;
   var randomAuthor;
  function getQuote(){
    var quotes = ["A martini.Shaken,not stirred","I'm gonna make him an offer he can't refuse","Just a flesh wound","No, I am your father","He-e-e-e-re's Johnnie!","Say 'hello' to my little friend!","I'll be back","I'm the king of the world!","Frankly, my dear. I don't give a damn","...Bond. James Bond"];
    var author = ["-James Bond","-Don Vito Corleone","-King Arthur","-Darth Vader","-Jack Torrance","-Tony Montana","-Terminator","-Jack Dawson","-Rhett Butler","-James Bond"];  
     randomNum = Math.floor((Math.random()*quotes.length));
     randomQuote = quotes[randomNum];
     randomAuthor = author[randomNum];
    $(".quote").text(randomQuote);
    $(".author").text(randomAuthor);
  }
    $("#new-quote").on("click", function(){
    getQuote();    
    });
    $("#tweet").on("click", function(){
      window.open("https://twitter.com/intent/tweet?text="+randomQuote+randomAuthor);
    });
    
});