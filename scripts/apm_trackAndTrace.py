import requests

def doIt():
    page = requests.get("https://www.apmterminals.com/en/operations/north-america/port-elizabeth/track-"+
                        "and-trace-results?Inquiry=booking&ref=86696616&terminal=8b78a529-3eb8-4c37-afba-a7ce186937a9")
    print(page)


