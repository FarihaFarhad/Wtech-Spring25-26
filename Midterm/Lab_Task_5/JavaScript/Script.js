function analyzeText() {
    let text = document.getElementById("inputText").value;

    let trimmedText = text.trim()

    if (trimmedText === "") {
        document.getElementById("resultBox").innerHTML ="Please enter text first";
        return;
    }

    
    let charCount = text.length;

    let words = trimmedText.split(/\s+/);
    let wordCount = words.length;

    
    let reversedText = text.split("").reverse().join("");

    
    document.getElementById("resultBox").innerHTML = 
    "<h3>Analysis Result:</h3>"+
    "Total Characters:" + charCount + "<br>"+
    "Total Words:"+wordCount+"<br>"+
    "Reversed Text:"+ reversedText;
    
}