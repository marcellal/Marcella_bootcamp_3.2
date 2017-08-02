import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-roomlist',
  templateUrl: './roomlist.component.html',
  styleUrls: ['./roomlist.component.css']
})
export class RoomlistComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  data: Object[] = [
    {"RoomID":"Room 1", "RoomType":"A", "Price":"1000.000"},
    {"RoomID":"Room 2", "RoomType":"B", "Price":"2000.000"},
    {"RoomID":"Room 3", "RoomType":"C", "Price":"3000.000"},
    {"RoomID":"Room 4", "RoomType":"D", "Price":"4000.000"}
    
  ]
}
