$(document).ready(function() {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxe
});

// prevent for resubmission 
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

function reply_click(eid) {
    var tb = document.getElementById('mytable');
    eid = eid.replace('e', '');
    document.getElementById('edit_id').value = tb.rows[eid].cells[1].innerHTML;
    document.getElementById('edit_name').value = tb.rows[eid].cells[2].innerHTML;
    document.getElementById('edit_fname').value = tb.rows[eid].cells[3].innerHTML;
    document.getElementById('edit_gen').value = tb.rows[eid].cells[4].innerHTML;
    document.getElementById('edit_mobile').value = tb.rows[eid].cells[5].innerHTML;
    document.getElementById('edit_email').value = tb.rows[eid].cells[6].innerHTML;
    document.getElementById('edit_addr').value = tb.rows[eid].cells[7].innerHTML;
    document.getElementById('edit_qua').value = tb.rows[eid].cells[8].innerHTML;
    document.getElementById('edit_jobp').value = tb.rows[eid].cells[9].innerHTML;
    document.getElementById('edit_dept').value = tb.rows[eid].cells[10].innerHTML;
    document.getElementById('edit_empcat').value = tb.rows[eid].cells[11].innerHTML;
    document.getElementById('edit_joind').value = tb.rows[eid].cells[12].innerHTML;
    document.getElementById('edit_endd').value = tb.rows[eid].cells[13].innerHTML;
    document.getElementById('edit_sala').value = tb.rows[eid].cells[14].innerHTML;
    select_dropdown(edit_sel_gen, tb.rows[eid].cells[4].innerHTML);
    select_dropdown(edit_sel_qua, tb.rows[eid].cells[8].innerHTML);
    select_dropdown(edit_sel_job, tb.rows[eid].cells[9].innerHTML);
    select_dropdown(edit_sel_dept, tb.rows[eid].cells[10].innerHTML);
    select_dropdown(edit_sel_emp, tb.rows[eid].cells[11].innerHTML);

    alert(eid);
}

function del_click(did) {
    var tb = document.getElementById('mytable');
    did = did.replace('d', '');
    var a = document.getElementById('delete_href');
    a.href = 'crud_delete.php?id=' + did

}

function count_record() {
    var tb = document.getElementById('mytable');
    var l = tb.rows.length;
    l = l - 1;
    document.getElementById('total_record').innerHTML = "( " + l + " Record Found )";
}

function add_sel_gen1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('add_gen').value = sel.options[sel.selectedIndex].text;
}

function add_sel_qua1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('add_qua').value = sel.options[sel.selectedIndex].text;
}

function add_sel_job1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('add_jobp').value = sel.options[sel.selectedIndex].text;
}

function add_sel_dept1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('add_dept').value = sel.options[sel.selectedIndex].text;
}

function add_sel_emp1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('add_empcat').value = sel.options[sel.selectedIndex].text;
}

// select dropdown text
function select_dropdown(dropdown_id, text_content) {
    /* alert(dropdown_id);
    var dd = document.getElementById("'" + dropdown_id + "'");
    alert(dd);
    for (var i = 0; i < dd.options.length; i++) {
        if (dd.options[i].text === "'" + text_content + "'") {
            dd.selectedIndex = i;
            break;
        }
    } */
    var dd = dropdown_id;
    for (var i = 0; i < dd.options.length; i++) {
        if (dd.options[i].text === text_content) {
            dd.selectedIndex = i;
            break;
        }
    }
}

// upade text
function edit_sel_gen1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('edit_gen').value = sel.options[sel.selectedIndex].text;
}

function edit_sel_qua1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('edit_qua').value = sel.options[sel.selectedIndex].text;
}

function edit_sel_job1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('edit_jobp').value = sel.options[sel.selectedIndex].text;
}

function edit_sel_dept1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('edit_dept').value = sel.options[sel.selectedIndex].text;
}

function edit_sel_emp1(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    document.getElementById('edit_empcat').value = sel.options[sel.selectedIndex].text;
}