    let clearChange;
    let change = (num = 0) => {
        clearChange = setInterval(() =>{
            if(num >= 3) num = 0;
            num++;
            $('').attr('src', `${num}.png`);
            $('.active-pro').attr('class', 'dot-pro');
            $(`#pro-${num - 1}`).addClass('active-pro');
        }, 2500);
    };
    
    let stopChange = () => clearInterval(clearChange);

    let moveImg = (num) => {
        $('#project-img').attr('src', `${num}.png`);
        $('.active-pro').attr('class', 'dot-pro');
        $(`#pro-${num - 1}`).addClass('active-pro');
    };

    $('#project-img').mouseenter(stopChange);
    $('#project-img').mouseout(() => {
        let currentNum = parseInt($('.active-pro').attr('id').slice(4));
        change(currentNum);
    });

//move prev and next img
    $('#prev').click(() => {
        stopChange();
        let currentNum = parseInt($('.active-pro').attr('id').slice(4));
        if(currentNum == 0) currentNum = 3;
        moveImg(currentNum);
    });
    $('#next').click(() => {
        stopChange();
        let currentNum = parseInt($('.active-pro').attr('id').slice(4)) + 2;
        if(currentNum == 4) currentNum = 1; 
        moveImg(currentNum);
    })
    change();