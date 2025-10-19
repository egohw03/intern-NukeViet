/**
 * Book Manager Site JavaScript
 */

(function($) {
    'use strict';
    
    var BookManager = {
        init: function() {
            this.bindEvents();
            this.initComponents();
            this.initAnimations();
        },
        
        bindEvents: function() {
            // Smooth scroll for anchor links
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                }
            });
            
            // Book item hover effects
            $('.book-item').on('mouseenter', function() {
                $(this).addClass('hovered');
            }).on('mouseleave', function() {
                $(this).removeClass('hovered');
            });
            
            // Image lazy loading effect
            $('.book-image img').on('load', function() {
                $(this).addClass('loaded');
            });
            
            // Search functionality (if implemented)
            $('#book-search').on('keyup', function() {
                var searchTerm = $(this).val().toLowerCase();
                $('.book-item').each(function() {
                    var bookTitle = $(this).find('.book-title a').text().toLowerCase();
                    var bookAuthor = $(this).find('.book-meta p').text().toLowerCase();
                    
                    if (bookTitle.indexOf(searchTerm) > -1 || bookAuthor.indexOf(searchTerm) > -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        },
        
        initComponents: function() {
            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();
            
            // Initialize image zoom
            $('.book-cover img').on('click', function() {
                var imgSrc = $(this).attr('src');
                var imgAlt = $(this).attr('alt');
                
                // Create modal for image zoom
                var modal = $('<div class="image-modal">' +
                    '<div class="modal-content">' +
                        '<span class="close">&times;</span>' +
                        '<img src="' + imgSrc + '" alt="' + imgAlt + '">' +
                    '</div>' +
                '</div>');
                
                $('body').append(modal);
                modal.fadeIn(300);
                
                // Close modal
                modal.on('click', function(e) {
                    if (e.target === this || $(e.target).hasClass('close')) {
                        modal.fadeOut(300, function() {
                            modal.remove();
                        });
                    }
                });
                
                // Close with ESC key
                $(document).on('keyup.imageModal', function(e) {
                    if (e.keyCode === 27) {
                        modal.fadeOut(300, function() {
                            modal.remove();
                        });
                        $(document).off('keyup.imageModal');
                    }
                });
            });
            
            // Initialize back to top button
            this.initBackToTop();
        },
        
        initAnimations: function() {
            // Animate book items on scroll
            $(window).on('scroll', function() {
                $('.book-item').each(function() {
                    var elementTop = $(this).offset().top;
                    var elementBottom = elementTop + $(this).outerHeight();
                    var viewportTop = $(window).scrollTop();
                    var viewportBottom = viewportTop + $(window).height();
                    
                    if (elementBottom > viewportTop && elementTop < viewportBottom) {
                        $(this).addClass('animate-in');
                    }
                });
            });
            
            // Initial check
            $(window).trigger('scroll');
        },
        
        initBackToTop: function() {
            // Create back to top button
            var backToTop = $('<button class="back-to-top" title="Back to Top"><i class="fa fa-chevron-up"></i></button>');
            $('body').append(backToTop);
            
            // Show/hide button based on scroll position
            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 300) {
                    backToTop.addClass('show');
                } else {
                    backToTop.removeClass('show');
                }
            });
            
            // Scroll to top when clicked
            backToTop.on('click', function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
            });
        }
    };
    
    // Initialize when document is ready
    $(document).ready(function() {
        BookManager.init();
    });
    
})(jQuery);

// CSS for image modal and back to top button
$('<style>')
    .prop('type', 'text/css')
    .html(`
        .image-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            animation: fadeIn 0.3s ease;
        }
        
        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 90%;
            max-height: 90%;
        }
        
        .modal-content img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.5);
        }
        
        .close {
            position: absolute;
            top: -40px;
            right: 0;
            color: #fff;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        
        .close:hover {
            color: #ccc;
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        
        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }
        
        .book-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .book-item.animate-in {
            opacity: 1;
            transform: translateY(0);
        }
        
        .book-image img {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .book-image img.loaded {
            opacity: 1;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @media (max-width: 768px) {
            .back-to-top {
                bottom: 20px;
                right: 20px;
                width: 45px;
                height: 45px;
            }
            
            .modal-content {
                max-width: 95%;
                max-height: 95%;
            }
        }
    `)
    .appendTo('head');
