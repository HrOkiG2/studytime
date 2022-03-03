//時間表示
let s = 0;
let m = 0;
let h = 0;

//inc()戻り値
let rs;

function inc(){
    s++;

    if(s >= 60){
        //60秒経過したら1分追加
        s = 0;
        m++;
        
        if(m >= 60){
            //60分経過したら1時間追加
            m = 0;
            h++;
        }
    }

    //0の結合
    if(10 > s){
        s = "0" + s;
        m = "0" + m;
        h = "0" + h;
    }

    //格納
    this.rs = h.slice(-2) + ":" + m.slice(-2) + ":" + s;
}

function studying(){
    //加算呼び出し
    inc();

    let rr = this.rs;  //inc()戻り値取得
    let start = document.getElementById("sTime");
    start.innerHTML = rr;  //HTML出力
}

setInterval("studying()",1000);

