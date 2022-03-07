export let timer = {

    start: {
        s: 0,
        m: 0,
        h: 0,
        start: null,
        sTimer() {
            //時間開始
            this.s++;

            if(this.s >= 60){
                //60秒経過したら1分追加
                this.s = 0;
                this.m++;
            
                if(this.m >= 60){
                    //60分経過したら1時間追加
                    this.m = 0;
                    this.h++;
                }
            }
            return {
                s: this.s,
                m: this.m,
                h: this.h
            };
        }
    },

    stop: {
        stopTime: 0,
    }
};


