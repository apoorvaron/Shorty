<!DOCTYPE html>
  <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<script>
  function submit_form(){
    let username = document.querySelector('#username').value;
    let password = document.querySelector('#password').value;
    // console.log(username);
    // console.log(password);
    var formData = new FormData();
    formData.append('username',  username);
    formData.append('password',  password);
    
      for (const value of formData.values()) {
        console.log(value);
          // if(value=='' || value=='undefined')
      }

      $.ajax({
                type: "POST",
                url: "./admin/dBconn/api.php/?q=submitReg",
                data : formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data){
                    // alert(data.message);
                    // console.log(data.message);
                    // window.location.replace();
                    // window.location.replace('./files/registered.php');
                    console.log("Sucess");
                },
                error: function(xhr, status, error){
                    // window.location.reload();
                    console.log("Nooooo!!!!");
                    // window.location.replace('./files/registered.php');

                    // alert("Fill in the details");
                },
      });
  }
</script>
<body class="antialiased sans-serif bg-gray-200">
	<div  x-cloak>
		<div class="max-w-3xl mx-auto px-4 py-10">



			<div x-show.transition="step != 'complete'">	
				<!-- Top Navigation -->
				<div class="border-b-2 py-4">
	
					<div class="flex flex-col md:flex-row md:items-center md:justify-between">
						<div class="flex-1">
							<div x-show="step === 1">
								<div class="text-lg font-bold text-gray-700 leading-tight">Registration Form</div>
							</div>
							
				
						</div>

						
					</div>
				</div>
				<!-- /Top Navigation -->

				<!-- Step Content -->
				<div class="py-10">	
					<div x-show.transition.in="step === 1">
						<div class="mb-5 text-center">
							<div class="mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
								<img id="image" class="object-cover w-full h-32 rounded-full" :src="image" />
							</div>
							
							<label 
								for="fileInput"
								type="button"
								class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium"
							>
								<svg xmlns="http://www.w3.org/2000/svg" class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
									<path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
									<circle cx="12" cy="13" r="3" />
								</svg>						
								Browse Photo
							</label>

							<div class="mx-auto w-48 text-gray-500 text-xs text-center mt-1">Click to add profile picture</div>

							<input name="photo" id="fileInput" accept="image/*" class="hidden" type="file" @change="let file = document.getElementById('fileInput').files[0]; 
								var reader = new FileReader();
								reader.onload = (e) => image = e.target.result;
								reader.readAsDataURL(file);">
						</div>
            <form method="POST">
              <div class="mb-5">
                <label for="firstname" class="font-bold mb-1 text-gray-700 block">Username</label>
                <input type="text"
                  class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                  id="username"
                  name="username"
                  required
                  placeholder="Enter your firstname...">
              </div>

              <div class="mb-5">
                <label  class="font-bold mb-1 text-gray-700 block">password</label>
                <input type="password"
                  id="password"
                  name="password"
                  class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium" required
                  placeholder="Enter your email address...">
              </div>
              <button
                type="submit"
                name="submit"
                onclick="submit_form()"
                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
              >Register</button>
            </form>
					</div>


				</div>
				<!-- / Step Content -->
			</div>
		</div>
	</div>

</body>
</html>