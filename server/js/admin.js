var keyidmap = [];
var idmap = [
    "select_A",
    "select_S",
    "select_D",
    "select_F",
    "select_J",
    "select_K",
    "select_L",
    "select_Sp",
];
var delmap = [];
var adminkey = $.cookie("key");

function refreshList(){
    $.getJSON("/admin.php?key=" + adminkey, function(json){
        keyidmap = [];
        delmap = [];
        $.each(idmap, function(key, value){
            $("#" + idmap[key]).html("");
        });
        $("#leftnumber").html(json[0]);
        $.each(json[1], function(key, value){
            keyidmap[key] = value[0];
            delmap[key] = value[0];
            $("#" + idmap[key]).html(value[1]);
        });
    });
}

function allowComment(id){
    if(keyidmap[id] != undefined){
        delete delmap[id];
        $.get("/admin.php?key=" + adminkey + "&allow=" + keyidmap[id]);
        $("#" + idmap[id]).html("<s>" + $("#" + idmap[id]).html() + "</s>");
    }
}

function deleteComment(){
    $.each(delmap, function(key, value){
        if(value != undefined){
            $.get("/admin.php?key=" + adminkey + "&delete=" + value);
        }
    });
}

refreshList();

$(document).keypress(function(event){
    switch(event.which){
        case 65:
        case 97:
            allowComment(0);
            break;
        case 83:
        case 115:
            allowComment(1);
            break;
        case 68:
        case 100:
            allowComment(2);
            break;
        case 70:
        case 102:
            allowComment(3);
            break;
        case 74:
        case 106:
            allowComment(4);
            break;
        case 75:
        case 107:
            allowComment(5);
            break;
        case 76:
        case 108:
            allowComment(6);
            break;
        case 59:
            allowComment(7);
            break;
        case 13:
            refreshList();
            break;
        case 32:
            deleteComment()
            refreshList();
            break;
    }
});
