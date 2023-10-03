var PitLib = {
    Audio:{
        audPos:new Audio('https://cdn.jsdelivr.net/gh/anupam-dixit/files@master/quill-bor/aud/pos.mp3'),
        audNeg:new Audio('https://cdn.jsdelivr.net/gh/anupam-dixit/files@master/quill-bor/aud/neg.mp3'),
        play:function (level=1) {
            switch (level) {
                case 1:this.audPos.play();break;
                case 0:this.audNeg.play();break;
            }
        }
    }

}
