var req = getXmlHttpRequestObject();
window.onload = getCloud();

function getXmlHttpRequestObject()
{
    if(window.HMLHttpRequest)
    {
        return new XMLHttpRequest();
    }
    else if(window.ActiveXObject)
    {
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
    else
    {
        alert('Ajax funktioniert bei Ihnen nicht!');
    }
}

function getCloud()
{
    if(req.readyState == 4 || req.readyState == 0)
    {
        req.open('GET', 'cloud2.php', true);
        req.setRequestHeader("Content-Type", "text/plain");
        req.onreadystatechange = setCloud();
        req.send(NULL);
    }
}

function setCloud(words)
{
    if(req.readyState == 4)
    {
        var response = eval(req.responseText);
        document.getElementById('cloud2.php').innerHTML = response.cloud2;
    }
}
