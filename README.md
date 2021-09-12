# Term Frequency Threshold (TF-T)
Term Frequency using term documents with Threshold (TF-T)

### Features
<ol>
  <li>Text preprocessing</li>
  <li>Query document or message (d<sub>0</sub>)</li>
  <li>Term documents (d<sub>1</sub>, d<sub>2</sub>, ..., d<sub>n</sub>)</li>
  <li>Analyze a query document (d<sub>0</sub>) using the term documents (d<sub>1</sub>, d<sub>2</sub>, ..., d<sub>n</sub>) as document corpus</li>
  <li>Sum of normalized term frequencies (TF) per document</li>
  <li>TF threshold for signal detection based on the normalized count of distinct input term present in term document</li>
  <li>Suitable if with no access to a large document corpus</li>
</ol>

### Applications
<ul>
  <li>Dictionary-based text analysis (e.g. query)</li>
  <li>Recommender systems</li>
  <li>Simulation, chatbot or robot conversations (rule or retrieval-based)</li>
</ul>
