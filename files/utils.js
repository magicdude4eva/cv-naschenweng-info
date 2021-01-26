function openWindow(url, width, Height, bScrollablePar) {

	var wndWindowHandle;
	
	if (bScrollablePar) {
		wndWindowHandle = window.open(url, "Certificate", "width="+width+",height="+Height+",directories=no,location=no,menubar=yes,scrollbars=yes,status=no,toolbar=yes,resizable=yes",1);
	} else {
		wndWindowHandle = window.open(url, "Certificate", "width="+width+",height="+Height+",directories=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,resizable=yes",1);
	}

	if (wndWindowHandle) {
		wndWindowHandle.focus();
	}
}
