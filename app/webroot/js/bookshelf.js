/**
 * bookshelf.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
(function() {

	var supportAnimations = 'WebkitAnimation' in document.body.style ||
			'MozAnimation' in document.body.style ||
			'msAnimation' in document.body.style ||
			'OAnimation' in document.body.style ||
			'animation' in document.body.style,
		animEndEventNames = {
			'WebkitAnimation' : 'webkitAnimationEnd',
			'OAnimation' : 'oAnimationEnd',
			'msAnimation' : 'MSAnimationEnd',
			'animation' : 'animationend'
		},
		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
		scrollWrap = document.getElementById( 'scroll-wrap' ),
		docscroll = 0,
		serverlocation = "http://"+window.location.hostname,
		books = document.querySelectorAll( '#bookshelf figure' );

	function scrollY() {
		return window.pageYOffset || window.document.documentElement.scrollTop;
	}

	

	function Book( el ) {

		this.el = el;
		this.book = this.el.querySelector( '.book' );

		this.ctrls = this.el.querySelector( '.buttons' );
		this.gotodetail = this.el.querySelector( '.book' );
		this.details = this.el.querySelector( '.details' );

		this.buttonlist = this.el.querySelector( 'li.buttonlist' );
		
		// create the necessary structure for the books to rotate in 3d
		this._layout();

		this.bbWrapper = document.getElementById( this.book.getAttribute( 'data-book' ) );
		
		//console.log(this.bbWrapperBG);
		if( this.bbWrapper ) {
			this._initBookBlock();
		}
		this._initEvents();
	}

	Book.prototype._layout = function() {
		this.bbWrapperBG = this.book.getAttribute('data-image');
		this.wrapperId = this.el.id;
		
		if( Modernizr.csstransforms3d ) {
			
			this.book.innerHTML = '<style>#'+this.el.id+' .book .cover::before{background: -webkit-linear-gradient(left, transparent 0%, rgba(0, 0, 0, 0.01) 1%, rgba(0, 0, 0, 0.1) 50%, transparent 100%), url('+serverlocation+'/'+this.bbWrapperBG+'), #009bdb;background: linear-gradient(to right, transparent 0%, rgba(0, 0, 0, 0.01) 1%, rgba(0, 0, 0, 0.1) 50%, transparent 100%), url('+serverlocation+'/'+this.bbWrapperBG+'), #009bdb;background-size:160px 100px;}</style>'+'<div class="cover"><div id="frontcover" class="front" style="background: url('+serverlocation+'/'+this.bbWrapperBG+');background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.1) 0%, rgba(211, 211, 211, 0.1) 5%, rgba(255, 255, 255, 0.15) 5%, rgba(255, 255, 255, 0.1) 9%, rgba(0, 0, 0, 0.01) 100%), url('+serverlocation+'/'+this.bbWrapperBG+'), #009bdb;background: linear-gradient(to right, rgba(0, 0, 0, 0.1) 0%, rgba(211, 211, 211, 0.1) 5%, rgba(255, 255, 255, 0.15) 5%, rgba(255, 255, 255, 0.1) 9%, rgba(0, 0, 0, 0.01) 100%), url('+serverlocation+'/'+this.bbWrapperBG+'), #009bdb; background-size:80px 99px;"></div><div class="inner inner-left"></div></div><div class="inner inner-right"></div>';

			var perspective = document.createElement( 'div' );
			perspective.className = 'perspective';
			perspective.appendChild( this.book );
			this.el.insertBefore( perspective, this.ctrls );

			
			//this.bbWrapperSpin = document.getElementById(  );

		}

		classie.add( this.book, 'detailsaja' );

		//this.cover.style.background = 'url('+serverlocation+'/img/bookcover1.png)';
		//this.cover.style.background = '-webkit-linear-gradient(left, rgba(0, 0, 0, 0.1) 0%, rgba(211, 211, 211, 0.1) 5%, rgba(255, 255, 255, 0.15) 5%, rgba(255, 255, 255, 0.1) 9%, rgba(0, 0, 0, 0.01) 100%), url('+serverlocation+'/img/bookcover1.png), #009bdb';
		//this.cover.style.background = 'linear-gradient(to right, rgba(0, 0, 0, 0.1) 0%, rgba(211, 211, 211, 0.1) 5%, rgba(255, 255, 255, 0.15) 5%, rgba(255, 255, 255, 0.1) 9%, rgba(0, 0, 0, 0.01) 100%), url('+serverlocation+'/img/bookcover1.png), #009bdb';


		this.closeDetailsCtrl = document.createElement( 'span' )
		this.closeDetailsCtrl.className = 'close-details';
		this.details.appendChild( this.closeDetailsCtrl );
	}

	Book.prototype._initBookBlock = function() {
		// initialize bookblock instance
		this.bb = new BookBlock( this.bbWrapper.querySelector( '.bb-bookblock' ), {
			speed : 700,
			shadowSides : 0.8,
			shadowFlip : 0.4
		} );
		// boobkblock controls
		this.ctrlBBClose = this.bbWrapper.querySelector( ' .bb-nav-close' );
		this.ctrlBBNext = this.bbWrapper.querySelector( ' .bb-nav-next' );
		this.ctrlBBPrev = this.bbWrapper.querySelector( ' .bb-nav-prev' );
	}

	Book.prototype._initEvents = function() {
		var self = this;
		if( !this.ctrls ) return;

		if( this.bb ) {
			//this.ctrls.querySelector( 'a:nth-child(1)' ).addEventListener( 'click', function( ev ) { ev.preventDefault(); self._open(); } );
			this.ctrlBBClose.addEventListener( 'click', function( ev ) { ev.preventDefault(); self._close(); } );
			this.ctrlBBNext.addEventListener( 'click', function( ev ) { ev.preventDefault(); self._nextPage(); } );
			this.ctrlBBPrev.addEventListener( 'click', function( ev ) { ev.preventDefault(); self._prevPage(); } );
		}

		this.gotodetail.addEventListener( 'click', function( ev ) { ev.preventDefault(); self._showDetails(); } );
		this.closeDetailsCtrl.addEventListener( 'click', function() { self._hideDetails(); } );
	}

	Book.prototype._open = function() {
		docscroll = scrollY();
		
		classie.add( this.el, 'open' );
		classie.add( this.bbWrapper, 'show' );

		var self = this,
			onOpenBookEndFn = function( ev ) {
				this.removeEventListener( animEndEventName, onOpenBookEndFn );
				document.body.scrollTop = document.documentElement.scrollTop = 0;
				classie.add( scrollWrap, 'hide-overflow' );
			};

		if( supportAnimations ) {
			this.bbWrapper.addEventListener( animEndEventName, onOpenBookEndFn );
		}
		else {
			onOpenBookEndFn.call();
		}
	}

	Book.prototype._close = function() {
		classie.remove( scrollWrap, 'hide-overflow' );
		setTimeout( function() { document.body.scrollTop = document.documentElement.scrollTop = docscroll; }, 25 );
		classie.remove( this.el, 'open' );
		classie.add( this.el, 'close' );
		classie.remove( this.bbWrapper, 'show' );
		classie.add( this.bbWrapper, 'hide' );

		var self = this,
			onCloseBookEndFn = function( ev ) {
				this.removeEventListener( animEndEventName, onCloseBookEndFn );
				// reset bookblock starting page
				self.bb.jump(1);
				classie.remove( self.el, 'close' );
				classie.remove( self.bbWrapper, 'hide' );
			};

		if( supportAnimations ) {
			this.bbWrapper.addEventListener( animEndEventName, onCloseBookEndFn );
		}
		else {
			onCloseBookEndFn.call();
		}
	}

	Book.prototype._nextPage = function() {
		this.bb.next();
	}

	Book.prototype._prevPage = function() {
		this.bb.prev();
	}

	Book.prototype._showDetails = function() {

		classie.add( this.el, 'details-open' );
		$(this.buttonlist).fadeIn();
		$('.bench2').css({'z-index':1});

	}

	Book.prototype._hideDetails = function() {
		classie.remove( this.el, 'details-open' );
		$(this.buttonlist).fadeOut();
		$('.bench2').css({'z-index':200});

	}

	function init() {
		[].slice.call( books ).forEach( function( el ) {
			new Book( el );
		} );
	}

	init();

})();