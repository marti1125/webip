function IE6(){
	alert("soy IE XD!!");	
	$("#opcion_ie6").append('<object id=MediaPlayer width=320 height=286 classid=CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95 standby=Loading Windows Media Player components... type=application/x-oleobject codebase=http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112><param name=filename value=hon.wmv><param name=Showcontrols value=True><param name=autoStart value=True><embed type=application/x-mplayer2 src=video.flv name=MediaPlayer width=320 height=240></embed>');
}