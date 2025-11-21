import 'package:flutter/material.dart';

class ReviewScreen extends StatefulWidget {
  const ReviewScreen({super.key});

  @override
  State<ReviewScreen> createState() => _ReviewScreenState();
}

class _ReviewScreenState extends State<ReviewScreen> {
  int rating = 0;
  final _headline = TextEditingController();
  final _comment = TextEditingController();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('Leave a Review')),
      body: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Row(
              children: List.generate(5, (i) {
                final idx = i + 1;
                return IconButton(
                  icon: Icon(idx <= rating ? Icons.star : Icons.star_border, color: Colors.amber),
                  onPressed: () => setState(() => rating = idx),
                );
              }),
            ),
            TextField(controller: _headline, decoration: const InputDecoration(labelText: 'Headline')),
            TextField(controller: _comment, maxLines: 4, decoration: const InputDecoration(labelText: 'Comment')),
            const Spacer(),
            ElevatedButton(
              onPressed: () {
                ScaffoldMessenger.of(context).showSnackBar(const SnackBar(content: Text('Review submitted')));
              },
              child: const Text('Submit'),
            )
          ],
        ),
      ),
    );
  }
}
