
    <div>
        <div id="chatOpen" class="container-fluid p-2" style="position: fixed; bottom: 7.598vh; right: 0; width: 12vh; height: 4vh; background-color: rgb(57, 192, 237); overflow-y: scroll; border-radius: 15px; font-size: 11px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="margin-right: 5px;">
                    <!-- Add an ID to the arrow down icon for click event -->
                    <i id="toggleChat" class="fa fa-angle-down text-white"></i>
                </div>
                <div style="margin-left: 10px;">
                    <span id="chatLabel" class="text-white">Open Chat</span>
                </div>
            </div>
        </div>
        <div id="chatContent" class="container-fluid p-2" style="position: fixed; bottom: 7.598vh; right: 0; width: 50vh; height: 30vh; background-color: rgb(19, 31, 69); overflow-y: scroll; border-radius: 15px;display: none;">
            <div style="display: block;">
                <div style="display: flex; align-items: center;">
                    <div style="width: 50px; height: 50px; margin-right: 10px;">
                        <img src="{{asset('images/logo.png')}}" width="100%" height="100%" style="border-radius: 50px;">
                    </div>
                    <div class="text-white font-weight-bold">
                        StockViser AI Assistant
                    </div>
                </div>

                <div id="content-box" class="container-fluid p-2" style="height: clac(100vh - 130px); overflow-y: scroll">
                    
                </div>
                <div class="container-fluid w-100 px-3 py-2 d-flex" style="height: 62px;">
                    <form id="message-form" class="d-flex" style="flex-grow: 1;">
                        <div class="mr-2 pl-2" style="background: #ffffff1c; width: 100%; border-radius: 5px; display: flex;">
                            <input id="message-input" class="text-white" type="text" name="input" placeholder="Type your message..." style="background: none; width: 100%; height: 100%; border: 0; outline: none;">
                        </div>
                        <div id="button-submit" class="text-center" style="background: #4acfee; width: 50px; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa fa-paper-plane text-white" aria-hidden="true"></i>
                        </div>
                    </form>                                    
                </div>                
            </div>    
        </div>
    </div>

{{-- Jquery Ajax --}}
{{-- Jquery Ajax --}}
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Initial state: chatbox is visible
        let isChatboxVisible = true;

        // Toggle chatbox visibility on arrow down icon click
        $('#chatOpen').click(function() {
            const chatboxContent = $('#chatContent');
            const chatLabel = $('#chatLabel');
            const chatbox = $('#chatOpen');
            const chatboxText = $('#chatLabel')
            
            if (isChatboxVisible) {
                // chatboxContent.hide();
                // chatLabel.text('Open Chat');
                // chatbox.css({
                //     width: '12vh', // Adjust to your desired collapsed width
                //     bottom: '7.598vh',
                // });
                // chatboxText.css({
                //     fontSize: '11px', // Adjust to your desired collapsed width
                // });

                chatboxContent.show();
                chatLabel.text('Hide Chat');
                chatbox.css({
                    width: '50vh', // Set original width when expanded
                    bottom: '37.8vh',
                });
                chatboxText.css({
                    fontSize: '15px', // Adjust to your desired collapsed width
                });
            } else {
                // chatboxContent.show();
                // chatLabel.text('Hide Chat');
                // chatbox.css({
                //     width: '50vh', // Set original width when expanded
                //     bottom: '37.8vh',
                // });
                // chatboxText.css({
                //     fontSize: '15px', // Adjust to your desired collapsed width
                // });

                chatboxContent.hide();
                chatLabel.text('Open Chat');
                chatbox.css({
                    width: '12vh', // Adjust to your desired collapsed width
                    bottom: '7.598vh',
                });
                chatboxText.css({
                    fontSize: '11px', // Adjust to your desired collapsed width
                });
            }
            isChatboxVisible = !isChatboxVisible;
        });
    });

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    // Add a default greeting message when the page loads
    $(document).ready(function() {
        // Add a default greeting message when the page loads
        $('#content-box').append(`
            <div class="d-flex mb-2">
                <div class="mr-2" style="width: 45px; height: 45px;">
                    <img src="{{asset('images/Avatar.png')}}" width="100%" height="100%" style="border-radius: 50px;">
                </div>
                <div class="text-white px-3 py-2" style="width: 270px;background: #13254b;border-radius: 10px;font-size: 85%;">
                    Hello {{ auth()->user()->first_name }}, how can I help you?
                </div>
            </div>`
        );

        // Handle form submission when button is clicked
        $('#button-submit').click(function() {
            $('#message-form').submit();
        });


        // Handle form submission
        $('#message-form').submit(function(event) {
            event.preventDefault(); // Prevent form submission

            var value = $('#message-input').val();
            if (value.trim() !== '') {
                $('#content-box').append(`
                    <div class="mb-2">
                        <div class="float-right px-3 py-2" style="width: 270px;background: #4acfee;border-radius:10px;float: right;font-size:85%;">
                            ` + value + `
                        </div>
                        <div style="clear: both;"></div>
                    </div>`
                );

                $.ajax({
                    type: 'post',
                    url: '{{url('send')}}',
                    data: {
                        'input': value
                    },
                    success: function(data) {
                        $('#content-box').append(`
                            <div class="d-flex mb-2">
                                <div class="mr-2" style="width: 45px; height: 45px;">
                                    <img src="{{asset('images/Avatar.png')}}" width="100%" height="100%" style="border-radius: 50px;">
                                </div>
                                <div class="text-white px-3 py-2" style="width: 270px;background: #13254b;border-radius: 10px;font-size: 85%;">
                                    ` + data + `
                                </div>
                            </div>`
                        );
                        $('#message-input').val(''); // Clear input field after sending
                    }
                });
            }
        });
    });

</script>