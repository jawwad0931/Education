// for Quotes Generator script
const Apiurl = "https://api.quotable.io/random";
const quotes = document.getElementById('quotes');
const authors = document.getElementById('authors');



async function quoteBtn(url){
    const response = await fetch(url);
    const data = await response.json();
    console.log(data);

    quotes.innerHTML = data.content;
    authors.innerHTML = data.author;
}


quoteBtn(Apiurl);


function tweet(){
  window.open("https://twitter.com/intent/tweet?text=" + quotes.innerHTML ,"Twitter Window" ,"height=300px","width=300px");
}