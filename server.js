const express = require('express');
const mongoose = require('mongoose');
const app = express();
require('dotenv').config();

// Middleware
app.use(express.json());

// MongoDB Connection
mongoose.connect(process.env.MONGO_URI, {
  useNewUrlParser: true,
  useUnifiedTopology: true,
}).then(() => {
  console.log('MongoDB Connected');
}).catch((err) => {
  console.log(err);
});

// Model for Bacteria Data
const BacteriaSchema = new mongoose.Schema({
  concentration: Number,
  status: String
});
const Bacteria = mongoose.model('Bacteria', BacteriaSchema);

// Route to get data
app.get('/bacteria', async (req, res) => {
  try {
    const data = await Bacteria.find();
    res.json(data);
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
});

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));
