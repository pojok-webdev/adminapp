getduration = function(_start,_end){
	_diff = _end - _start;
	seconds = parseInt(_diff/1000);
	minutes = parseInt(seconds / 60);
	hours = parseInt(minutes / 60);
	days = parseInt(hours / 24);
	hari = parseInt(_diff/(1000*60*60*24));
	sisahari = parseInt(_diff % (1000*60*60*24));
	sisamenit = parseInt(minutes % 60);
	sisadetik = parseInt(seconds % 60);
	sisajam = parseInt(hours % 24);
	return days + " hari,"+ sisajam + " jam,"+ sisamenit + " menit," + sisadetik + " detik";
}
getjsdate = function(dttime){
	dttimesplit = dttime.split(" ");
	dt = dttimesplit[0].split("/");
	year = dt[2];
	month = dt[1]-1;
	day = dt[0];
	tm = dttimesplit[1].split(":");
	hour = tm[0];
	minute = tm[1];
	second = tm[2];
	return new Date(year,month,day,hour,minute,second);	
}
getcurrentdatetime = function(){
	cur = new Date();
	date = cur.getDate()+'/'+(cur.getMonth()+1).toString()+'/'+cur.getFullYear();
	time = cur.getHours()+':'+cur.getMinutes()+':'+cur.getSeconds();
	return date+' '+time;
}
setdura = function(){
	if(oTable.fnSettings().aoData.length===0){
		console.log('Tidak ada data');
	}else{
	$("#thisdatatable tbody tr").each(function(){
		dr = $(this).attr("ticketstart");
		drend = $(this).attr("ticketend");
		//console.log("DREND",drend);
		ticketend = getjsdate(drend);

		dttime = dr;
		dttimesplit = dttime.split(" ");
		dt = dttimesplit[0].split("/");
		//console.log("DT",dt);
		year = dt[2];
		month = dt[1]-1;
		day = dt[0];
		//console.log("PADI APP, TEST FUNCTION",dttime);
		tm = dttimesplit[1].split(":");
		//console.log("TM",tm);
		hour = tm[0];
		minute = tm[1];
		second = tm[2];
		_start = new Date(year,month,day,hour,minute,second);

		//status = $(this).find("[fieldname='status']").html();
		status = $(this).hasClass("ticketOpen")?"ticketOpen":"ticketClosed";
		console.log("className",status);
		switch(status){
			case "ticketOpen":
				_end = new Date();
			break;
			case "ticketClosed":
				_end = ticketend;
			break;
		}
//		_end = new Date();

		dura = getduration(_start,_end);
		duration = $(this).find("[fieldName='duration']").html(dura);
		
		//console.log("DR",dr);
		//console.log('padiTiketrow',duration);
		//console.log("gedr",getduration(_start,_end));
	});
}}
//setInterval(function(){ setdura(); }, 3000);
console.log("Current Datetime",getcurrentdatetime());