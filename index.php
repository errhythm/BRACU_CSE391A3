<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat&family=Montserrat:wght@900&family=Tiro+Tamil&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>CSE391 Assignment 2</title>
</head>
<body onload="calc()">
    <nav class="wrapper">
        <div class="logo">
            <a href="index.html">
                <img src="img/bracu.png" alt="logo">
            </a>
        </div>
        <div class="navbar">
            <ul>
            </ul>
        </div>
    </nav>
    <div class="sectiontitle">
        <h1>HERO CONVERTER</h1>
    </div>
    <div class="section_container">
        <div class="hero_converter">
            <span class="hero_converter_text">Convert: </span><input id="converter_input" type="number">
            <select name="unit" id="converter_unit">
                <option value="lbtokg">LB to KG</option>
                <option value="kgtolb">KG to LB</option>
            </select>
            <button onclick="convert()" type="button" id="converter_button">Go</button>
            <span id="converter_result"></span>
        </div>
    </div>
    <div class="spacing"></div>
    <div class="sectiontitle">
        <h1>CALCULATOR</h1>
    </div>
    <div class="section_container">
        <div class="calculator">
            <table id="calc-table">
                <tr>
                    <td><span id="calc-input">Input Series of Number:</span></td>
                    <td><input id="calc-value" type="text"></td>
                </tr>
                <tr>
                    <td><div>Max: </div></td>
                    <td><div><span id="max">0</span></div></td>
                </tr>
                <tr>
                    <td><div>Min: </div></td>
                    <td><div><span id="min">0</span></div></td>
                </tr>
                <tr>
                    <td><div>Sum: </div></td>
                    <td><div><span id="sum">0</span></div></td>
                </tr>
                <tr>
                    <td><div>Average: </div></td>
                    <td><div><span id="average">0</span></div></td>
                </tr>
                <tr>
                    <td><div>Reverse Order: </div></td>
                    <td><div><span id="reverse"></span></div></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="spacing"></div>
    <div class="sectiontitle">
        <h1>Magic!</h1>
    </div>
    <div class="section_container">
        <div class="magic">
            <textarea id="magic-input" rows="15"></textarea>
            <div class="magic-button">
                <button onclick="cleartext()" type="button">Clear It</button>
                <button onclick="capitalizetext()" type="button" value="NO" id="capitalize-button">Capitalize</button>
                <button onclick="sortLines()" type="button">Sort</button>
                <button onclick="reverseLines()" type="button">Reverse</button>
                <button onclick="stripBlank()" type="button">Strip Blank</button>
                <button onclick="addLineNo()" type="button">Add Numbers</button>
                <button onclick="shuffleLines()" type="button">Shuffle</button>
            </div>
        </div>
    </div>
    <div class="spacing"></div>
    <div class="sectiontitle">
        <h1>QUOTE</h1>
    </div>
    <!-- Quotes at the bottom before footer -->
    <div class="quotes" id="quotes">
        <div class="quotesvg"><i class="fa-solid fa-quote-right" id="quote_icon"></i></div>
        <div id="quote_text">Loading...</div>
        <div id="quote_author">Please wait</div>
    </div>
    <div class="quotebutton">
        <button onclick="red()" type="button" id="red-button"><i class="fa-solid fa-circle"></i></button>
        <button onclick="blue()" type="button" id="blue-button"><i class="fa-solid fa-circle"></i></button>
        <button onclick="yellow()" type="button" id="yellow-button"><i class="fa-solid fa-circle"></i></button>
        <button onclick="pink()" type="button" id="pink-button"><i class="fa-solid fa-circle"></i></button>
        <button onclick="fetchQuote()" type="button" id="quote-button"><i class="fa-solid fa-rotate"></i></button>
    </div>
    <div class="spacing"></div>
    <script src="script.js"></script> 
    <script src="https://kit.fontawesome.com/692c2638c1.js" crossorigin="anonymous"></script>  
    </body>
</html>