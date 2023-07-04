function GetTime(){
    var today = new Date();
    var hour = today.getHours();
    var minute = today.getMinutes();
    
            if (hour>=12){                  //Adding endings
                    suffix = "P.M.";}
            else{
                    suffix = "A.M.";}
    
    
    minute = addZero(minute);       //Call addZero function
    hour = removeMilitary(hour);    //Call removeMilitary Function
    
    var fullTime = hour + ":" + minute + " " + suffix;  //Combine hour minute and the suffix
    
    
    
            function addZero(number){
                            if (number<10){
                                number = "0" + number;
                            }
                            return number;
            }
    
            function removeMilitary(hour){ //This function can be removed if desired by user.
    
                if (hour > 0 && hour <= 12) {
                    hour = "" + hour;
                } else if (hour > 12) {
                    hour = "" + (hour - 12);
                } else if (hour == 0) {
                    hour= "12";
                }
                return hour;
            }
    return fullTime;
    
    }

    