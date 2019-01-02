function openInNewTab(url) {
    var win = window.open(url, '_blank');
    win.focus();
}

function testFunction(){
    var userInput = document.getElementById("input").value;
    var url = "https://www.apmterminals.com/en/operations/north-america/port-elizabeth/track-and-trace-results?Inquiry=import&ref=" + userInput + "&terminal=8b78a529-3eb8-4c37-afba-a7ce186937a9";
    openInNewTab(url);

}