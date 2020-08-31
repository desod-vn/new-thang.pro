
$.ajax({
    url : 'm/pro.json',
    type : 'get',
    dataType : 'text',
    success : result => {
        const item = JSON.parse(result);
    
//Default item when enter my page
        const listDefault = () => {
            const count = (item.length - 1);
            let outCode = '';
            clickItem();
            for(let i = count; i >= (count - 5); i--){

                outCode += `<div id="${i}" class="call-4 item-pr">
                            <img class="img" src="${item[i].img}" alt="" />
                            <div class="item-title">${item[i].name}</div></div>`;
            }
            return outCode;
        }


        const clickItem = () => {
            $('.item-pr').click(function() {
                const id = this.id;
                document.body.style.overflowY = 'hidden';
                $('body').after('<div id="item-show"></div>');
                showItem(id);
                $('#item-show').click((choose) => {
                    if(choose.target.id == 'item-show'){
                    document.body.style.overflowY = 'auto';
                    $('#item-show').remove();
                    }
                });
            });
        }

        const showItem = id => {
            const incode = `<div class="wrap"><div class="call-8 media"><iframe src="${item[id].ytb}" src="${item[id].ytb}"
            allow="autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="call-4"><div id="more-detail">
            <div class="name">${item[id].name}</div>
            <a class="down" href="${item[id].link}" target="_blank">DOWNLOAD</a>
            </div></div></div>`;
            $('#item-show').html(incode);
        }
    $("#items-list").html(listDefault());
    clickItem();
    }
});
