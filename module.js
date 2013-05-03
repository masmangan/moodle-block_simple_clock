M.block_simple_clock = {
    serverClockShown: true,
    userClockShown: true,
    pucClockShown: true,
    showSeconds: false,
    showDay: false,
    timeDifference: 0,

    initSimpleClock: function (YUIObject, server, user, puc, seconds, day, y,mo,d,h,m,s) {
        var serverTimeStart = new Date(y,mo,d,h,m,s);
        var currentTime = new Date();

        // Set up object properties
        this.timeDifference = currentTime.getTime() - serverTimeStart.getTime();
        this.serverClockShown = server;
        this.userClockShown = user;
        this.pucClockShown = puc;
        this.showSeconds = seconds;
        this.showDay = day;

        // Refresh clock display in 1 second
        this.updateTime();
    },

    getTimeCodedString: function (clockTime) {
        // FIXME: get proper decoding here
        var week = '' + (clockTime.getDay() + 1);
        var hm = clockTime.getHours() * 100 + clockTime.getMinutes();
        var slot = '--';
        var label;

        if(week == 1) { // no number for Sunday
            week = '-';
        }

        if (hm >= 800 && hm <= 940) { // no letter before 8am
            slot = 'AB';
        } 
        else if (hm >= 950 && hm <= 1130) { // no letter before 8am
            slot = 'CD';
        }
        else if (hm >= 1135 && hm <= 1225) { // no letter before 8am
            slot = 'E-';
        }
       else if (hm >= 1400 && hm <= 1540) { // no letter before 8am
            slot = 'FG';
        }
        else if (hm >= 1550 && hm <= 1730) { // no letter before 8am
            slot = 'HI';
        }
        else if (hm >= 1735 && hm <= 1910) { // no letter before 8am
            slot = 'JK';
        }
        else if (hm >= 1930 && hm <= 2015) { // no letter before 8am
            slot = 'LM';
        }
        else if (hm >= 2115 && hm <= 2245) { // no letter before 8am
            slot = 'NP';
        }
                                            
        label = week + slot
        return label;
    },

    updateTime: function () {
        var serverTime;
        var youTime;
        var pucTime;

        // Update the server clock if shown
        if(this.serverClockShown) {
            serverTime = new Date();
            serverTime.setTime(serverTime.getTime() - this.timeDifference);
            document.getElementById('block_progress_serverTime').value = this.getClockString(serverTime);

        }

        // Update the user clock if shown
        if(this.userClockShown) {
            youTime = new Date(); 
            document.getElementById('block_progress_youTime').value = this.getClockString(youTime) ;
        }

        // Update the PUC clock if shown
        if(this.pucClockShown) {
            pucTime = new Date();
            document.getElementById('block_progress_pucTime').value = this.getTimeCodedString(pucTime);
        }

        // Refresh clock display in 1 second
        setTimeout('M.block_simple_clock.updateTime()',1000);
    },

    getClockString: function (clockTime) {
        var clockString = '';
        var day = M.str.block_simple_clock.day_names.split(',')[clockTime.getDay()];
        var hours = clockTime.getHours();
        var minutes = clockTime.getMinutes();
        var seconds = clockTime.getSeconds();

        // Add the day name
        if(this.showDay) {
            clockString += day+' ';
        }

        // Add the hours
        if(hours>12) {
            clockString += hours-12;
        }
        else if (hours==0) {
            clockString += 12;
        }
        else {
            clockString += hours;
        }

        // Append a separator
        clockString += M.str.block_simple_clock.clock_separator;

        // Add the minutes
        if(minutes<10) {
            clockString += '0';
        }
        clockString += minutes;

        // Add the seconds if desired
        if(this.showSeconds) {
            clockString += M.str.block_simple_clock.clock_separator;
            if(seconds<10) {
                clockString += '0';
            }
            clockString += seconds;
        }

        // Add the am/pm suffix
        if(hours<12) {
            clockString += M.str.block_simple_clock.before_noon;
        }
        else {
            clockString += M.str.block_simple_clock.after_noon;
        }

        //clockString += '-';
        return clockString;
    }
};
