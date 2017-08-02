import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { RoomlistComponent } from './roomlist/roomlist.component';
import { BookingformComponent } from './bookingform/bookingform.component';
import { ClientinfoComponent } from './clientinfo/clientinfo.component';
import { PaymentComponent } from './payment/payment.component';

@NgModule({
  declarations: [
    AppComponent,
    RoomlistComponent,
    BookingformComponent,
    ClientinfoComponent,
    PaymentComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
