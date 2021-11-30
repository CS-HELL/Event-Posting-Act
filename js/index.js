function scrollto(div) {
    $('html,body').animate({
      scrollTop: $("#"+div).offset().top
    },'slow');
  };

  $(document).ready(function() {
    $('#posts-container').hide();

    $.getJSON('../posts.json', function(post) {

      let diffc = 1;
      let posts = [];
      posts = post;
      post.reverse();

      const dynamic = document.querySelector('#posts-container');

      for (var i = 0; i < post.length; i++){
      
        var fetch = document.querySelector('#posts-container').innerHTML;

        dynamic.innerHTML = `
          <div class="post po-${diffc}">
            <section>
              <div class="details-section"><span class="date">${posts[i].date}</span></div>
              <p>${posts[i].post_p}</p>
            </section>
          </div>` + fetch;

          if(diffc == 1){
            diffc = 2;
          } else{
            diffc = 1;
          }
      }
    })

    $('#subheader').click(function() {
      if($('#posts-container').is(':visible')){
        $('#posts-container').hide(1000);
      } else {
        $('#posts-container').show(1000);
      }
      
    })

  });