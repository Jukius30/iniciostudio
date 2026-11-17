import React, { Component } from 'react';
import flatpickr from 'flatpickr';

export default class BookingCalendar extends Component {
  constructor(props) {
    super(props);
    this.calendarRef = React.createRef();
    this.fpInstance = null;
  }

  componentDidMount() {
    if (this.calendarRef.current) {
      this.fpInstance = flatpickr(this.calendarRef.current, {
        inline: true,
        minDate: 'today',
        dateFormat: 'Y-m-d',
        disable: this.props.bookedDates || [],
        onChange: (selectedDates, dateStr) => {
          if (this.props.onSelectDate) {
            this.props.onSelectDate(dateStr);
          }
        },
      });
    }
  }

  componentWillUnmount() {
    if (this.fpInstance) {
      this.fpInstance.destroy();
    }
  }

  render() {
    return (
      <div
        className="calendar-wrapper text-left mx-auto lg:ml-auto"
        style={{ maxWidth: '450px' }}
      >
        <div ref={this.calendarRef} />
        <div className="mt-3 text-gray-500 text-xs text-center flex items-center justify-center gap-2">
          <span className="inline-block w-3 h-3 rounded-xs bg-[#dc3545]" />
          <span>Tanggal Merah / Sudah Full Booked</span>
        </div>
      </div>
    );
  }
}