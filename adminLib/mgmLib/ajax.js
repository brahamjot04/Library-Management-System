var dataRecords = $("#bookstable").DataTable({
  lengthChange: false,
  processing: true,
  serverSide: true,
  serverMethod: "post",
  order: [],
  ajax: {
    url: "ajax.php",
    type: "POST",
    data: { action: "listRecords" },
    dataType: "json",
  },
  columnDefs: [
    {
      targets: [0, 6, 7],
      orderable: false,
    },
  ],
  pageLength: 10,
});
