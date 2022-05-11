function InitialiseLoginGrid() {
  $.ajax({
    type: 'POST',
    url: 'DatabaseHelper.php',
    dataType: 'json',
    data: { GetLoginTableData: '' },
    success: function (response) {
      let source = {
        dataType: 'json',
        dataFields: [
          { name: 'LoginId', type: 'number' },
          { name: 'UserName', type: 'string' },
          { name: 'Password', type: 'string' },
          { name: 'LastLogin', type: 'string' },
        ],
        id: 'LoginId',
        localData: response,
      }
      let dataAdapter = new $.jqx.dataAdapter(source)
      $('#grid').jqxGrid({
        source: dataAdapter,
        columns: [
          { text: 'UserName', datafield: 'UserName', width: 250 },
          { text: 'Password', datafield: 'Password', width: 250 },
          { text: 'LastLogin', datafield: 'LastLogin', width: 180 },
        ],
      })
      NShowNotification('success', 'Login Data Loaded.')
    },
  })
}
