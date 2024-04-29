<script>


// Define your Cloudflare account ID and API token
const ACCOUNT_ID = 'd1e60664f7c51233c8e7a57dfac06c45';
const API_TOKEN = 'uR7zBKWFD1nyU63AWTvry6wNBFkJfRkCfz8LnuBf';

// Define a function to handle incoming requests
async function handleRequest(request) {
  // Check if the request method is POST
  if (request.method === 'POST') {
    try {
      // Parse the JSON body of the request
      const requestBody = await request.json();

      // Check if the request contains a prompt
      if (!requestBody.prompt) {
        throw new Error('Prompt is required');
      }

      // Define the messages array
      const messages = [
        { role: 'system', content: 'You are a friendly assistant' },
        { role: 'user', content: requestBody.prompt }
      ];

      // Construct the URL for the Cloudflare Workers AI endpoint
      const url = `https://api.cloudflare.com/client/v4/accounts/${ACCOUNT_ID}/ai/run/@cf/meta/@hf/thebloke/zephyr-7b-beta-awq`;

      // Make a POST request to the Cloudflare Workers AI endpoint
      const response = await fetch(url, {
        method: 'POST',
        headers: {
          'Authorization': `Bearer ${API_TOKEN}`,
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          stream: true,
          messages: messages
        })
      });

      // Return the streaming response
      return response;
    } catch (error) {
      // Handle any errors
      return new Response(JSON.stringify({ error: error.message }), {
        status: 400,
        headers: {
          'Content-Type': 'application/json'
        }
      });
    }
  } else {
    // Return an error response for unsupported request methods
    return new Response('Method Not Allowed', {
      status: 405,
      headers: {
        'Content-Type': 'text/plain'
      }
    });
  }
}

// Add an event listener to handle incoming requests
addEventListener('fetch', event => {
  event.respondWith(handleRequest(event.request));
});

</script>