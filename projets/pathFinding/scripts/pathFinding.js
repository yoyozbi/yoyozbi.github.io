var container = document.getElementById("container");
var table = document.getElementById("table");
console.log(table.children)
for(var i = 13;i<table.children.length;i++)
{
    var tr = table.children[i];
    for(var g = 13;g<tr.children.length;i++)
    {
        var td = tr.children;
        if(td.className == 'unvisited')
        {
            td.className == 'visited';
        }
    }
}