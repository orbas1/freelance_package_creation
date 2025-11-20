import 'package:equatable/equatable.dart';

import 'attachment.dart';
import 'user.dart';

class Gig extends Equatable {
  const Gig({
    required this.id,
    required this.title,
    required this.description,
    required this.price,
    this.address,
    this.user,
    this.rating,
    this.reviews,
    this.isFavourite = false,
    this.attachments = const AttachmentGroup(),
  });

  final int id;
  final String title;
  final String description;
  final double price;
  final String? address;
  final UserProfile? user;
  final double? rating;
  final int? reviews;
  final bool isFavourite;
  final AttachmentGroup attachments;

  factory Gig.fromJson(Map<String, dynamic>? json) {
    if (json == null) {
      return const Gig(id: 0, title: '', description: '', price: 0);
    }
    final priceValue = json['price'] ?? json['min_price'];
    return Gig(
      id: json['id'] is int ? json['id'] : int.tryParse(json['id']?.toString() ?? '') ?? 0,
      title: json['title']?.toString() ?? '',
      description: json['description']?.toString() ?? json['detail']?.toString() ?? '',
      price: priceValue is num
          ? (priceValue as num).toDouble()
          : double.tryParse(priceValue?.toString() ?? '') ?? 0,
      address: json['address']?.toString(),
      user: UserProfile.fromJson(json['user'] as Map<String, dynamic>?),
      rating: json['rating'] is num
          ? (json['rating'] as num).toDouble()
          : double.tryParse(json['rating']?.toString() ?? ''),
      reviews: json['ratings_count'] is int
          ? json['ratings_count']
          : int.tryParse(json['ratings_count']?.toString() ?? ''),
      isFavourite: json['is_favourite'] == 1 || json['is_favourite'] == true,
      attachments: AttachmentGroup.fromJson(json['attachments'] as Map<String, dynamic>?),
    );
  }

  Map<String, dynamic> toJson() => {
        'id': id,
        'title': title,
        'description': description,
        'price': price,
        'address': address,
        'user': user?.toJson(),
        'rating': rating,
        'ratings_count': reviews,
        'is_favourite': isFavourite,
        'attachments': attachments.toJson(),
      };

  @override
  List<Object?> get props => [id, title, description, price, address, user, rating, reviews, isFavourite, attachments];
}
