var clientId = '499379964607-qs4mvdnnotioj4b2euf4ib37qv9n2nb2.apps.googleusercontent.com';
      var apiKey = 'AIzaSyCUqnAtXpNjEZG1sXBuuP0ZEwMsV8jBHxk';
      var scopes = 'https://www.googleapis.com/auth/gmail.readonly';

      function handleClientLoad() {
        gapi.client.setApiKey(apiKey);
        window.setTimeout(checkAuth, 1);
      }

      function checkAuth() {
        gapi.auth.authorize({
          client_id: clientId,
          scope: scopes,
          immediate: true
        }, handleAuthResult);
      }

      function handleAuthClick() {
        gapi.auth.authorize({
          client_id: clientId,
          scope: scopes,
          immediate: false
        }, handleAuthResult);
        return false;
      }

      function handleAuthResult(authResult) {
        if(authResult && !authResult.error) {
          loadGmailApi();
          $('#authorize-button').remove();
          $('.table-inbox').removeClass("hidden");
        } else {
          $('#authorize-button').removeClass("hidden");
          $('#authorize-button').on('click', function(){
            handleAuthClick();
          });
        }
      }

      function loadGmailApi() {
        gapi.client.load('gmail', 'v1', displayInbox);
      }

      function displayInbox() {
        var request = gapi.client.gmail.users.messages.list({
          'userId': 'me',
          'labelIds': 'INBOX',
          'maxResults': 20
        });

        request.execute(function(response) {
          var index = 0;
          $.each(response.messages, function() {
            index++;
            var messageRequest = gapi.client.gmail.users.messages.get({
              'userId': 'me',
              'id': this.id
            });
            if(index%6 == 0){

            messageRequest.execute(appendMessageRow);
          }
            else if(index%6 == 1){
              messageRequest.execute(appendMessageRow1);
            }
            else if(index%6 == 2){
              messageRequest.execute(appendMessageRow2);
            }
            else if(index%6 == 3){
              messageRequest.execute(appendMessageRow3);
            }
            else if(index%6 == 4){
              messageRequest.execute(appendMessageRow4);
            }
            else if(index%6 == 5){
              messageRequest.execute(appendMessageRow5);
            }

            messageRequest.execute(appendMessagePopUpRow);
          });
        });
      }

      function appendMessageRow(message) {
        $('.tl').append(
          ' <div class="tl-item">\
              <div class="tl-desk">\
                <div class="panel">\
                <div class="panel-body">\
                <span class="arrow"></span> <span class="tl-icon red"></span> <span class="tl-date">'+new Date(getHeader(message.payload.headers, 'Date')).toDateString().slice(4,15)+'</span>\
                <h3 class="green">'+getHeader(message.payload.headers, 'From')+'</h3>\
                <a href="#message-modal-' + message.id +
                  '" data-toggle="modal" id="message-link-' + message.id+'"><p>'+getHeader(message.payload.headers, 'Subject')+'</p>\
               </a>\
              </div></div></div></div>'
        );
      }


      function appendMessageRow1(message) {
        $('.tl').append(
          ' <div class="tl-item alt">\
              <div class="tl-desk">\
                <div class="panel">\
                <div class="panel-body">\
                <span class="arrow-alt"></span> <span class="tl-icon green"></span> <span class="tl-date">'+new Date(getHeader(message.payload.headers, 'Date')).toDateString().slice(4,15)+'</span>\
                <h3 class="yellow">'+getHeader(message.payload.headers, 'From')+'</h3>\
                <a href="#message-modal-' + message.id +
                  '" data-toggle="modal" id="message-link-' + message.id+'"><p>'+getHeader(message.payload.headers, 'Subject')+'</p>\
               </a>\
              </div></div></div></div>'

        );
      }

      function appendMessageRow2(message) {
        $('.tl').append(
          ' <div class="tl-item">\
              <div class="tl-desk">\
                <div class="panel">\
                <div class="panel-body">\
                <span class="arrow"></span> <span class="tl-icon blue"></span> <span class="tl-date">'+new Date(getHeader(message.payload.headers, 'Date')).toDateString().slice(4,15)+'</span>\
                <h3 class="red">'+getHeader(message.payload.headers, 'From')+'</h3>\
                <a href="#message-modal-' + message.id +
                  '" data-toggle="modal" id="message-link-' + message.id+'"><p>'+getHeader(message.payload.headers, 'Subject')+'</p>\
               </a>\
              </div></div></div></div>'
        );
      }
      function appendMessageRow3(message) {
        $('.tl').append(
          ' <div class="tl-item alt">\
              <div class="tl-desk">\
                <div class="panel">\
                <div class="panel-body">\
                <span class="arrow-alt"></span> <span class="tl-icon turquoise"></span> <span class="tl-date">'+new Date(getHeader(message.payload.headers, 'Date')).toDateString().slice(4,15)+'</span>\
                <h3 class="green">'+getHeader(message.payload.headers, 'From')+'</h3>\
                <a href="#message-modal-' + message.id +
                  '" data-toggle="modal" id="message-link-' + message.id+'"><p>'+getHeader(message.payload.headers, 'Subject')+'</p>\
               </a>\
              </div></div></div></div>'
        );
      }
      function appendMessageRow4(message) {
        $('.tl').append(
          ' <div class="tl-item">\
              <div class="tl-desk">\
                <div class="panel">\
                <div class="panel-body">\
                <span class="arrow"></span> <span class="tl-icon orange"></span> <span class="tl-date">'+new Date(getHeader(message.payload.headers, 'Date')).toDateString().slice(4,15)+'</span>\
                <h3 class="turquoise">'+getHeader(message.payload.headers, 'From')+'</h3>\
                <a href="#message-modal-' + message.id +
                  '" data-toggle="modal" id="message-link-' + message.id+'"><p>'+getHeader(message.payload.headers, 'Subject')+'</p>\
               </a>\
              </div></div></div></div>'
        );
      }
      function appendMessageRow5(message) {
        $('.tl').append(
          '<div class="tl-item alt">\
              <div class="tl-desk">\
                <div class="panel">\
                <div class="panel-body">\
                <span class="arrow-alt"></span> <span class="tl-icon red"></span> <span class="tl-date">'+new Date(getHeader(message.payload.headers, 'Date')).toDateString().slice(4,15)+'</span>\
                <h3 class="blue">'+getHeader(message.payload.headers, 'From')+'</h3>\
                <a href="#message-modal-' + message.id +
                  '" data-toggle="modal" id="message-link-' + message.id+'"><p>'+getHeader(message.payload.headers, 'Subject')+'</p>\
               </a>\
              </div></div></div></div>'
        );
      }


      function appendMessagePopUpRow(message) {
        $('.table-inbox tbody').append(
          '<tr>\
            <td>'+getHeader(message.payload.headers, 'From')+'</td>\
            <td>\
              <a href="#message-modal-' + message.id +
                '" data-toggle="modal" id="message-link-' + message.id+'">' +
                getHeader(message.payload.headers, 'Subject') +
              '</a>\
            </td>\
             <td>'+new Date(getHeader(message.payload.headers, 'Date')).toDateString().slice(4,15)+'</td>\
          </tr>'
        );

        $('body').append(
          '<div class="modal fade" id="message-modal-' + message.id +
              '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\
            <div class="modal-dialog modal-lg">\
              <div class="modal-content">\
                <div class="modal-header">\
                  <button type="button"\
                          class="close"\
                          data-dismiss="modal"\
                          aria-label="Close">\
                    <span aria-hidden="true">&times;</span></button>\
                  <h4 class="modal-title" id="myModalLabel">' +
                    getHeader(message.payload.headers, 'Subject') +
                  '</h4>\
                </div>\
                <div class="modal-body">\
                  <iframe id="message-iframe-'+message.id+'" srcdoc="<p>Loading...</p>">\
                  </iframe>\
                </div>\
              </div>\
            </div>\
          </div>'
        );

        $('#message-link-'+message.id).on('click', function(){
          var ifrm = $('#message-iframe-'+message.id)[0].contentWindow.document;
          $('body', ifrm).html(getBody(message.payload));


        });

      }

      function getHeader(headers, index) {
        var header = '';

        $.each(headers, function(){
          if(this.name === index){
            header = this.value;
          }
        });
        return header;
      }

      function getBody(message) {
        var encodedBody = '';
        if(typeof message.parts === 'undefined')
        {
          encodedBody = message.body.data;
        }
        else
        {
          encodedBody = getHTMLPart(message.parts);
        }
        encodedBody = encodedBody.replace(/-/g, '+').replace(/_/g, '/').replace(/\s/g, '');
        return decodeURIComponent(escape(window.atob(encodedBody)));
      }

      function getHTMLPart(arr) {
        for(var x = 0; x <= arr.length; x++)
        {
          if(typeof arr[x].parts === 'undefined')
          {
            if(arr[x].mimeType === 'text/html')
            {
              return arr[x].body.data;
            }
          }
          else
          {
            return getHTMLPart(arr[x].parts);
          }
        }
        return '';
      }
