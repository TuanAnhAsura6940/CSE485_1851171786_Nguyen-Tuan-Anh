// document : đối tượng quản lý mọi nội dung bên trong trang web
// phương thức : getElementById truy cập phần tử HTML theo Id
// textContent : thuôc tính  xác định Văn Bản đặt giữa 2 cặp thẻ , ko lấy thẻ
// innverHTML : lấy cả thẻ  lẫn nội dung trong nó
// Mô tả BÀI TOÁN : Khi tôi NHẤP CHUỘT vào LIÊN KẾT , thì NỘI DUNG CỦA ĐOẠN VĂN ĐC LẤY RA và HIỂN THỊ TRÊN HỘP THOẠI ALERT.


// Bước 1 : Xác định các phần thử sẽ  tác động :
var jFruit         = document.getElementById('txtFruit');
var jShowFruit     = document.getElementById('btnShowfruit');
var jImages        = document.getElementsByTagName('img');

// Bước 2 : Bắt sự kiện 
jShowFruit.addEventListener('click',HamGido);

//Bước 3 : Hàm xử lý sự kiện
function HamGido(){
    if (jFruit.value == '')
    {
        alert('Empty !');
    } 
    else 
    {
        var fruitList = ['berry' , 'apple' , 'olive' , 'beans' , 'emergencyFood'];
        // Kiểm tra xem jFruit.value có tồn tại trong mảng k 
        for (var i = 0 ; i < fruitList.length ; i++)
         {
            if(jFruit.value == fruitList[i])
            {
                jImages[0].src = 'img/' + jFruit.value + '.jpg';
                // alert(jimages.src);
                break;
            }
             else 
            {
                if ( i == fruitList.length - 1)
                    alert("No images found");
            }
        }
    }
    

}
