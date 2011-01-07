
function write_email( first, second ) {
    var string4 = first + "@" + second;
	document.write("<a href=" + "mail" + "to:" + first + "@" + second + ">" + string4 + "</a>");
}

function remove_frames()
{
  var thisPage = "http://www.sigcse.org" + self.location.pathname + self.location.hash + self.location.search;
  var thisLocal = "http://localhost" + self.location.pathname + self.location.hash + self.location.search;
  var testServer = "http://test.mikehelmick.com" + self.location.pathname + self.location.hash + self.location.search;
  if (top.location.toString().indexOf("sigcse2012/search.php") < 0) {
    if (top.location != thisPage && top.location != thisLocal  && top.location != testServer) {
      top.location = thisPage;
    }
  }
}

/** MENU **/
var menuStatus = new Array();

function pageLoad(expand, selected) {
  if (expand != null) {
	toggle_menu(expand);
  }
  if (selected != null) {
	var selectedElem = selected + "_menu";
    addSelected(selectedElem);	
  }
}

function toggle_menu(title) {
  if (menuStatus[title] == null) {
    menuStatus[title] = false;	
  }
	
  var element = title + "_sub";
  var statusElem = title + "_status";

  if (menuStatus[title]) {
    document.getElementById(statusElem).src = "/sigcse2012/images/arrow_down.png";
    menuStatus[title] = false;
    Effect.Puff(element, { duration: 0.5 });
  } else {
    document.getElementById(statusElem).src = "/sigcse2012/images/arrow_up.png";
    menuStatus[title] = true;
    Effect.SlideDown(element, { duration: 0.25 });
  }
}

function addSelected(id) {
  var element = document.getElementById(id);
  var classes = element.getAttribute('class');
  element.setAttribute('class', classes + " selected");
}

function removeSelected(id) {
  var element = document.getElementById(id);
  var classes = element.getAttribute('class');
  element.setAttribute('class', classes.replace("selected", ""));
}
