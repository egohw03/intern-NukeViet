/**
 * Book Manager Admin JavaScript
 */

(function($) {
    'use strict';
    
    var BookManagerAdmin = {
        init: function() {
            this.bindEvents();
            this.initComponents();
        },
        
        bindEvents: function() {
            // Confirm delete action
            $(document).on('click', '.btn-delete-book', function(e) {
                if (!confirm($(this).data('confirm-text') || 'Bạn có chắc chắn muốn xóa sách này?')) {
                    e.preventDefault();
                    return false;
                }
            });
            
            // Form validation
            $('#book-form').on('submit', function(e) {
                var title = $('#title').val().trim();
                var author = $('#author').val().trim();
                
                if (!title) {
                    alert($(this).data('error-title') || 'Vui lòng nhập tên sách');
                    $('#title').focus();
                    e.preventDefault();
                    return false;
                }

                if (!author) {
                    alert($(this).data('error-author') || 'Vui lòng nhập tên tác giả');
                    $('#author').focus();
                    e.preventDefault();
                    return false;
                }
            });
            
            // Image preview
            $('#image').on('change', function() {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').remove();
                        $(this).after('<div id="image-preview" class="form-group"><img src="' + e.target.result + '" class="img-responsive img-thumbnail" style="max-width: 200px; max-height: 200px;"></div>');
                    }.bind(this);
                    reader.readAsDataURL(file);
                }
            });
        },
        
        initComponents: function() {
            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();
            
            // Initialize date picker for publish year
            $('#publish_year').on('change', function() {
                var year = parseInt($(this).val());
                var currentYear = new Date().getFullYear();
                
                if (year < 1800 || year > currentYear + 5) {
                    var errorMsg = $(this).data('error-year') || 'Năm xuất bản phải từ 1800 đến ' + (currentYear + 5);
                    alert(errorMsg.replace('{CURRENT_YEAR}', currentYear + 5));
                    $(this).val(currentYear);
                }
            });
            
            // Auto-generate ISBN format
            $('#isbn').on('blur', function() {
                var isbn = $(this).val().replace(/[^0-9X]/g, '');
                if (isbn.length === 10 || isbn.length === 13) {
                    $(this).val(isbn);
                }
            });
        }
    };
    
    // Initialize when document is ready
    $(document).ready(function() {
        BookManagerAdmin.init();
    });
    
})(jQuery);
