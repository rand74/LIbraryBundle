$(document).ready(function() {
    $('#types').on('change', function () {
        if ($('#volumeInfoTittle').length != 0) {
            var title = $('#volumeInfoTittle').text().trim();
            $('#add_library_title').val(title);
        }
        if ($('#volumeInfoAuthor').length != 0) {
            var author = $('#volumeInfoAuthor').text().trim();
            $('#add_library_author').val(author);
        }
        if ($('#volumeInfoPublishedDate').length != 0) {
            var arrayPublishedDate = $('#volumeInfoPublishedDate').text().trim().split("-");
            $('#add_library_publishedDate_year').val(arrayPublishedDate[0]);
            $('#add_library_publishedDate_month').val(arrayPublishedDate[1]);
            $('#add_library_publishedDate_day').val(arrayPublishedDate[2]);
        }
        if ($('#volumeInfoDescription').length != 0) {
            var description = $('#volumeInfoDescription').text().trim();
            $('#add_library_resume').val(description);
        }
        if ($('#volumeInfoIsbn10').length != 0) {
            var isbn10 = $('#volumeInfoIsbn10').text().trim();
            $('#add_library_isbn10').val(isbn10);
        }
        if ($('#volumeInfoIsbn13').length != 0) {
            var isbn13 = $('#volumeInfoIsbn13').text().trim();
            $('#add_library_isbn13').val(isbn13);
        }
        if ($('#volumeInfoPageCount').length != 0) {
            var pageCount = $('#volumeInfoPageCount').text().trim();
            $('#add_library_pageCount').val(pageCount);
        }
        if ($('#volumeInfoLanguage').length != 0) {
            var language = $('#volumeInfoLanguage').text().trim();
            $('#add_library_language').val(language);
        }
    });
});