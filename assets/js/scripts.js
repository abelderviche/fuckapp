$(function(){
	var $logo           = $('.loader figure');
	var $btn            = $('#btn');
	var $btnManual      = $('#btnManual');
	var $menu           = $('[data="nav"]');
	var $menuHijo       = $menu.find('ul').children();
	var $micro          = $('[alt="micro"]');
	var $body           = $('body');
	var $centroMicro    = $(".microBack");
	var $btnMensaje     = $("#input-10");
	var $pantalla       = $(window).width();
	var $back 			= $("#back");
	var $grabar         = $("#grabar");
	var $imgPasos       = $("#pasos");
	var $inputVal       = $("[method='POST']").children("[placeholder]").css('background-position');
	var $topMicro;
	var objForm = {
		form : $("[method='POST']"),
		yosoy: $("[method='POST']").children(),
		valor: function(){
			return this.yosoy.css('background-position').substr(0,7);
		}
	};


	$(window).resize(function() {
		var $pantalla = $(window).width();
		var $pantallalto = $(window).height();
		console.log($pantalla + 'px' , $pantallalto + 'px');
	});

	function campo(objeto){
		objeto.yosoy.on('keyup',function(){
			var tamano = $(this).val().length;
			if($pantalla >= 480){
				$(this).css({'background-position':'35% -1000%'});
				if(tamano === 0){
					$(this).css({'background-position' :$inputVal});
				} 
			}else{
				$(this).css({'background-position':'25% -1000%'});
				if(tamano === 0){
					$(this).css({'background-position' :$inputVal});
				} 
			}
		})
	}
	$logo.animate({
		'margin-top':'30em',
		'opacity':'0'},2000,function(){
			$logo.parent().css('display','none');
		});
	$btn.on('click',function(){
		$menu.slideToggle();
	})
	$menuHijo.on('click', 'a',function(){
		$menu.slideToggle();
	})
	$micro.on('click',function(){
		/*$(this).toggleClass("opacity0");
		$body.toggleClass("microBack");
		$topMicro = $micro.children().position().top;
		$body.css({
			"background-position-y": ($topMicro - 245) + "px"
		});*/
		startButton(event);
	});
	$btnManual.on('click',function(){
		$body.removeClass('microBack');
		$back.css("visibility","visible");
	});
	$btnMensaje.on('click',function(){
		$(this).animate({
			'min-height':'250px'
		},1000);
	});
	$btnMensaje.next().on('click',function(){
		$(this).parent().parent().css('display','none');
	})
	$back.on('click',function(){
		$(this).css('visibility','hidden');
		$micro.removeClass("opacity0");
		$body.removeClass("microBack");
		$btnMensaje.css({"min-height":"0"});
	});
	campo(objForm);

	var langs =
		[['Afrikaans',       ['af-ZA']],
		 ['Bahasa Indonesia',['id-ID']],
		 ['Bahasa Melayu',   ['ms-MY']],
		 ['Català',          ['ca-ES']],
		 ['Čeština',         ['cs-CZ']],
		 ['Deutsch',         ['de-DE']],
		 ['English',         ['en-AU', 'Australia'],
		                     ['en-CA', 'Canada'],
		                     ['en-IN', 'India'],
		                     ['en-NZ', 'New Zealand'],
		                     ['en-ZA', 'South Africa'],
		                     ['en-GB', 'United Kingdom'],
		                     ['en-US', 'United States']],
		 ['Español',         ['es-AR', 'Argentina'],
		                     ['es-BO', 'Bolivia'],
		                     ['es-CL', 'Chile'],
		                     ['es-CO', 'Colombia'],
		                     ['es-CR', 'Costa Rica'],
		                     ['es-EC', 'Ecuador'],
		                     ['es-SV', 'El Salvador'],
		                     ['es-ES', 'España'],
		                     ['es-US', 'Estados Unidos'],
		                     ['es-GT', 'Guatemala'],
		                     ['es-HN', 'Honduras'],
		                     ['es-MX', 'México'],
		                     ['es-NI', 'Nicaragua'],
		                     ['es-PA', 'Panamá'],
		                     ['es-PY', 'Paraguay'],
		                     ['es-PE', 'Perú'],
		                     ['es-PR', 'Puerto Rico'],
		                     ['es-DO', 'República Dominicana'],
		                     ['es-UY', 'Uruguay'],
		                     ['es-VE', 'Venezuela']],
		 ['Euskara',         ['eu-ES']],
		 ['Français',        ['fr-FR']],
		 ['Galego',          ['gl-ES']],
		 ['Hrvatski',        ['hr_HR']],
		 ['IsiZulu',         ['zu-ZA']],
		 ['Íslenska',        ['is-IS']],
		 ['Italiano',        ['it-IT', 'Italia'],
		                     ['it-CH', 'Svizzera']],
		 ['Magyar',          ['hu-HU']],
		 ['Nederlands',      ['nl-NL']],
		 ['Norsk bokmål',    ['nb-NO']],
		 ['Polski',          ['pl-PL']],
		 ['Português',       ['pt-BR', 'Brasil'],
		                     ['pt-PT', 'Portugal']],
		 ['Română',          ['ro-RO']],
		 ['Slovenčina',      ['sk-SK']],
		 ['Suomi',           ['fi-FI']],
		 ['Svenska',         ['sv-SE']],
		 ['Türkçe',          ['tr-TR']],
		 ['български',       ['bg-BG']],
		 ['Pусский',         ['ru-RU']],
		 ['Српски',          ['sr-RS']],
		 ['한국어',            ['ko-KR']],
		 ['中文',             ['cmn-Hans-CN', '普通话 (中国大陆)'],
		                     ['cmn-Hans-HK', '普通话 (香港)'],
		                     ['cmn-Hant-TW', '中文 (台灣)'],
		                     ['yue-Hant-HK', '粵語 (香港)']],
		 ['日本語',           ['ja-JP']],
		 ['Lingua latīna',   ['la']]];
		for (var i = 0; i < langs.length; i++) {
		  select_language.options[i] = new Option(langs[i][0], i);
		}
		select_language.selectedIndex = 7;
		updateCountry();
		select_dialect.selectedIndex = 0;
		showInfo('info_start');
		function updateCountry() {
		  for (var i = select_dialect.options.length - 1; i >= 0; i--) {
		    select_dialect.remove(i);
		  }
		  var list = langs[select_language.selectedIndex];
		  for (var i = 1; i < list.length; i++) {
		    select_dialect.options.add(new Option(list[i][1], list[i][0]));
		  }
		  select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
		}
		var create_email = false;
		var final_transcript = '';
		var recognizing = false;
		var ignore_onend;
		var start_timestamp;
		if (!('webkitSpeechRecognition' in window)) {
		  upgrade();
		} else {
		  start_button.style.display = 'inline-block';
		  var recognition = new webkitSpeechRecognition();
		  recognition.continuous = false;
		  recognition.interimResults = false;
		  recognition.onstart = function() {
		    recognizing = true;
		    showInfo('info_speak_now');
		    //siguiente.style.display = 'none';
		    $('#siguiente').hide(500);
		    $('#puteada_mostrar').hide(500);
		    $('#voz').hide(500);
		    //start_img.src = dominio + 'img/mic.gif';
		    $micro.toggleClass("opacity0");
			$body.toggleClass("microBack");
			$topMicro = $micro.children().position().top;
			$body.css({
				"background-position-y": ($topMicro - 245) + "px"
			});
		  };
		  recognition.onerror = function(event) {
		    if (event.error == 'no-speech') {
		      start_img.src =  dominio + 'img/mic2.png';
		      showInfo('info_no_speech');
		      ignore_onend = true;
		    }
		    if (event.error == 'audio-capture') {
		      start_img.src =  dominio + 'img/mic2.png';
		      showInfo('info_no_microphone');
		      ignore_onend = true;
		    }
		    if (event.error == 'not-allowed') {
		      if (event.timeStamp - start_timestamp < 100) {
		        showInfo('info_blocked');
		      } else {
		        showInfo('info_denied');
		      }
		      ignore_onend = true;
		    }
		  };
		  recognition.onend = function() {
		    recognizing = false;
		    $micro.toggleClass("opacity0");
			$body.toggleClass("microBack");
		    if (ignore_onend) {
		      return;
		    }
		    //start_img.src =  dominio + 'img/mic2.png';
		    test_input.value = final_span.innerHTML;
		    $('#puteada_mostrar').html(test_input.value)
		    if(test_input.value == ''){
		      showInfo('info_no_speech');
		    }else{
		      $('#siguiente').fadeIn(500).css('display', 'block');
		      $('#puteada_mostrar').fadeIn(500).css('display', 'block');
		      $('#voz').fadeIn(500).css('display', 'block');
		    }
		    if (!final_transcript) {
		      //showInfo('info_start');
		      showInfo('info_no_speech');
		      return;
		    }
		    showInfo('');
		    if (window.getSelection) {
		      window.getSelection().removeAllRanges();
		      var range = document.createRange();
		      range.selectNode(document.getElementById('final_span'));
		      window.getSelection().addRange(range);
		    }
		    if (create_email) {
		      create_email = false;
		      createEmail();
		    }
		  };
		  recognition.onresult = function(event) {
		    var interim_transcript = '';
		    for (var i = event.resultIndex; i < event.results.length; ++i) {
		      if (event.results[i].isFinal) {
		        final_transcript += event.results[i][0].transcript;
		      } else {
		        interim_transcript += event.results[i][0].transcript;
		      }
		    }
		    final_transcript = capitalize(final_transcript);
		    final_span.innerHTML = linebreak(final_transcript);
		    interim_span.innerHTML = linebreak(interim_transcript);
		    if (final_transcript || interim_transcript) {
		      
		      showButtons('inline-block');

		      start_img.src =  dominio + 'img/mic.gif';
		    }
		  };
		}
		function upgrade() {
		  start_button.style.visibility = 'hidden';
		  showInfo('info_upgrade');
		}
		var two_line = /\n\n/g;
		var one_line = /\n/g;
		function linebreak(s) {
		  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
		}
		var first_char = /\S/;
		function capitalize(s) {
		  return s.replace(first_char, function(m) { return m.toUpperCase(); });
		}

		function startButton(event) {
		  if (recognizing) {
		    test_input.value = final_span.innerHTML;
		    puteada_mostrar.value = final_span.innerHTML;
		    $('#puteada_mostrar').html(test_input.value)
		    recognition.stop();
		    return;
		  }
		  final_transcript = '';
		  recognition.lang = select_dialect.value;
		  recognition.start();
		  ignore_onend = false;
		  final_span.innerHTML = '';
		  interim_span.innerHTML = '';
		 // start_img.src =  dominio + 'img/mic2.png';
		  showInfo('info_allow');
		  showButtons('none');
		  start_timestamp = event.timeStamp;
		}
		function showInfo(s) {
		  if (s) {
		    for (var child = info.firstChild; child; child = child.nextSibling) {
		      if (child.style) {
		        child.style.display = child.id == s ? 'inline' : 'none';
		      }
		    }
		    info.style.visibility = 'visible';
		    info.style.height = 'auto';
		  } else {
		    info.style.visibility = 'hidden';
		    info.style.height = '0px';
		  }
		}
		var current_style;
		function showButtons(style) {
		  if (style == current_style) {
		    return;
		  }
		  current_style = style;
		  copy_button.style.display = style;
		}
});
