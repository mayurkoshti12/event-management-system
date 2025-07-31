import React, { useEffect, useState } from 'react';
import axios from 'axios';

const EventList = () => {
  const [events, setEvents] = useState({ today: [], future: [], past: [] });
  const [loading, setLoading] = useState(true);
  const [openSections, setOpenSections] = useState({
    today: true,
    future: true,
    past: true,
  });

  const fetchEvents = async () => {
    setLoading(true);
    
    // Collapse all sections on refresh
    setOpenSections({
        today: false,
        future: false,
        past: false,
    });

    try {
      const res = await axios.get('http://localhost:8000/api/events');
      setEvents(res.data);
    } catch (err) {
      console.error("Failed to fetch events:", err);
    }
    setLoading(false);
  };

  useEffect(() => {
    fetchEvents();
  }, []);

  const toggleSection = (key) => {
    setOpenSections((prev) => ({ ...prev, [key]: !prev[key] }));
  };

  const renderEvent = (event) => (
    <div key={event.id} style={{ padding: "10px", borderBottom: "1px solid #ccc" }}>
      <h4>{event.title}</h4>
      <p>{event.description}</p>
      <small>{event.date} {event.time}</small><br />
      <small><strong>Location:</strong> {event.location || "N/A"}</small>
    </div>
  );

  const renderSection = (label, key, data) => (
    <div style={{ marginBottom: "20px", border: "1px solid #aaa", borderRadius: "8px" }}>
      <div
        onClick={() => toggleSection(key)}
        style={{
          background: "#eee",
          padding: "10px",
          cursor: "pointer",
          fontWeight: "bold",
        }}
      >
        {label} ({data.length}) {openSections[key] ? "▲" : "▼"}
      </div>
      {openSections[key] && (
        <div style={{ padding: "10px" }}>
          {data.length === 0 ? <p>No events available.</p> : data.map(renderEvent)}
        </div>
      )}
    </div>
  );

  return (
    <div style={{ padding: "20px", maxWidth: "800px", margin: "auto" }}>
      <h2>Event Viewer</h2>
      <button onClick={fetchEvents} style={{ marginBottom: "20px" }}>🔄 Refresh</button>

      {loading ? (
        <p>Loading...</p>
      ) : (
        <>
          {renderSection("📅 Today's Events", "today", events.today)}
          {renderSection("🔮 Future Events", "future", events.future)}
          {renderSection("🕰️ Past Events", "past", events.past)}
        </>
      )}
    </div>
  );
};

export default EventList;

