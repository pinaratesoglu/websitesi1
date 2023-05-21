// Vue.js ile form yönetimi için Vue örneği oluşturulur
var app = new Vue({
    el: '#app',
    data: {
      formData: {
        
        name: '',
        email: '',
        phone: ''
      }
      
    },
    methods: {
      submitForm: function() {
        // Form gönderildiğinde yapılacak işlemler buraya yazılır
        // Örneğin, verileri bir API'ye göndermek gibi
        console.log('Form gönderildi');
        console.log(this.formData);
        window.location.href = 'index.html'; 
  
        // Formu sıfırlamak için resetForm metodunu çağırabilirsiniz
        // this.resetForm();
       
            // Formun gönderilmesi ve işlemleri burada gerçekleştirilir
          
            // Gönderilen verileri URL parametreleri olarak hazırlar
            var queryParams = new URLSearchParams(this.formData);
            var query = queryParams.toString();
          
            // gonderilen-veriler.html sayfasına yönlendirme için window.location.href kullanılır
            window.location.href = 'gonderilen-veriler.html?' + query;
         
      },
      resetForm: function() {
        // Formu sıfırlama işlemleri burada yapılır
        this.formData.name = '';
        this.formData.email = '';
        this.formData.phone = '';
      }
    }
  });
  