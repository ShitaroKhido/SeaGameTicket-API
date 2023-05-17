# SeaGame Ticket API (Unfinished)

## Instructions

### **Migration and Seeder**

All table migration have been already defined and tested for this project.

### **API**

#### **1. Searching**

These are the main event URI that are being used to perform a searching for the specicific details.

```note
    GET|HEAD: api/seagame/booking/{id}
    GET|HEAD: api/seagame/availables/evenDate
    GET|HEAD: api/seagame/availables/schedules/{id}
    GET|HEAD: api/seagame/availables/sport
```

`Booking` can be done via `GET|HEAD: api/seagame/booking/{id}` with the GET method. Once the ticket is booked the seats number will be dcrease.

Example:

```note
http://127.0.0.1:8000/api/seagame/booking/1
```

`EvenDate` can be search via query string with the key of `date=YY-MM-DD`.

Example:

```note
http://127.0.0.1:8000/api/seagame/availables/evenDate?date=2021-12-15
```

`Schedules` for date can be search via path string with the id of available event date.

Example:

```note
http://127.0.0.1:8000/api/seagame/availables/schedules/6
```

`Available Schedule for Sports` can be searched by using the sport name via query string `name=string`

Example:

```note
http://127.0.0.1:8000/api/seagame/availables/sport?name=football
```

#### **2. Schedules**

These are some of the action that can be perform through schedules.

```note
    GET|HEAD  : api/seagame/schedule : seagameschedule.index
    POST      : api/seagame/schedule : seagameschedule.store › SchedulesController@store
    GET|HEAD  : api/seagame/schedule/{schedule} : seagameschedule.show
    DELETE    : api/seagame/schedule/{schedule}: seagameschedule.destroy
```

To create the schedeles we need use the URI `seagameschedule.store` with the data struction in post form.

Example:

```json
    "sport_id": "12",
    "first_country": "3",
    "second_country": "5",
    "event_id": "2",
    "playground_id": "1",
    "start_time": "14:00",
    "end_time": "16:00"
```

Schedules can also be delete by using its id with the delete method request, with path string.

Example:

```note
http://127.0.0.1:8000/api/seagame/schedule/1 | DELETE
```

So dose the same to show specific schedule, but with the GET method.

Example:

```note
http://127.0.0.1:8000/api/seagame/schedule/1 | GET
```

#### **3. Events**

```note
    GET|HEAD: api/seagame/event ...........seagameevent.index
    POST    : api/seagame/event: seagameevent.store
    GET|HEAD: api/seagame/event/{event}: seagameevent.show
    DELETE  : api/seagame/event/{event}: seagameevent.destroy
```

To create the schedeles we need use the URI `seagameevent.store` with the data struction in post form.

Example:

```json
    "date": "2023-05-12",
    "available_seats": "1000"
```

Events can also be delete by using its id with the delete method request, with path string.

Example:

```note
http://127.0.0.1:8000/api/seagame/event/1 | DELETE
```

So dose the same to show specific event, but with the GET method.

Example:

```note
http://127.0.0.1:8000/api/seagame/event/1 | GET
```

#### **4. Additionals URI**

For more additional route, can be find by download and run the command below in project folrder.

```console
php artisan route:list
```

`NOTE:` Although, this is the unfinished document. as we would like to appologize for any mistake or error.
