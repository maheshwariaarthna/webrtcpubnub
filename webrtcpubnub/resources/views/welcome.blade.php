<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>PubNub WebRTC</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

    <div id="username-input-modal" class="modal-background">
        <div class="user-input-modal">
            <h3>Chat Username</h3>
            <p>
                Input a username, 16 characters or fewer
            </p>
            <input id="username-input" type="text" maxlength="16" class="modal-text-input">
            <div id="join-button" class="modal-button disabled">
                Join Chat
            </div>
        </div>
    </div>

    <div id="incoming-call-modal" class="modal-background hide">
        <div class="user-input-modal">
            <h3>Incoming Call</h3>
            <p>
                From user <b id="call-from"></b>
            </p>
            <div id="accept-call" class="modal-button">
                Accept
            </div>
            <div id="reject-call" class="modal-button">
                Reject
            </div>
        </div>
    </div>

    <div id="call-confirm-modal" class="modal-background hide">
        <div class="user-input-modal">
            <h3>Video Call</h3>
            <p>
                Call user <b id="call-confirm-username"></b>?
            </p>
            <div id="yes-call" class="modal-button">
                Yes
            </div>
            <div id="no-call" class="modal-button">
                No
            </div>
        </div>
    </div>

    <div id="video-modal" class="video-modal hide">
        <div id="close-video" class="close-video">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
            </svg>
        </div>
        <video class="remote" id="remote-video" playsinline autoplay></video>
        <video class="me" id="my-video" playsinline autoplay muted></video>
        <img class="hide" id="broken-my-video" src="./broken-camera.png">
    </div>

    <div id="chat-interface" class="chat-interface">
        <div class="header">
            <div class="left">Online Now</div>
            <div class="middle">
                <h1>PubNub with WebRTC</h1>
            </div>
            <div class="right">
                <div class="video-sample-container">
                    <video id="my-video-sample" playsinline autoplay muted>
                    </video>
                    <img class="hide" id="broken-sample-video" src="./broken-camera.png">
                </div>
            </div>
        </div>
        <div id="online-list" class="online-list"></div>
        <div id="chat" class="chat">
            <div id="log" class="log"></div>
            <div class="input-container">
                <div class="textarea-container">
                    <textarea id="message-input" placeholder="Global Chat..." maxlength="10000"></textarea>
                </div>
                <div id="submit" class="submit">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript" src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.21.7.js"></script>
<script src="{{asset('/js/pubnub-js-webrtc.js')}}"></script>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
<script src="/js/myapp.js" type="text/javascript"></script>
</html>